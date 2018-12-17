<?php
$klein->respond('GET', '/kmutt_home/branch', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    //$d = $app->login->requireLogin('customer');

    $query = $conn->query("SELECT BranchName FROM G14_Branch")->fetchAll(PDO::FETCH_BOTH);

    $service->query = $query;
    $service->render('layouts/group1/select_branch.php');
});

$klein->respond('GET', '/kmutt_home/branch/[:movie_id]', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();
    date_default_timezone_set("Asia/Bangkok");

    $query = $conn->query("select distinct date(startTime) as start_date from available_movies where movie_id = '$request->movie_id'
    order by start_date asc;")->fetchAll(PDO::FETCH_ASSOC);

    $date = [];
    $status = false;
    foreach($query as $q) {
        $temp = new DateTime($q["start_date"]);
        $month = substr($temp->format("F"), 0, 3);
        array_push($date, [
            "str" => $temp->format("d")." ".$month." ".$temp->format("Y"),
            "date" => substr($temp->format("l"), 0, 3),
            "status" => ($status)? "" : " active ",
            "value" => $q["start_date"]
        ]);
        $status = true;
    }

    // $response->dump($date);
    // $response->sendBody();
    // die;

    $service->datenow = (new DateTime)->format("Y-m-d");
    $service->query = $date;
    $service->movie_id = $request->movie_id;
    $service->render('layouts/group1/showtime318.php');
});

$klein->respond('GET', '/movies/showtime/all/[:movie_id]/[:show_date]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    date_default_timezone_set("Asia/Bangkok");

    $target = $request->movie_id;
    $show_date = $request->show_date;

    $query = "select a.branch_id, b.branchname
    from (select distinct branch_id
    from available_movies where movie_id = $target and date(startTime) = '$show_date' ) a join G14_Branch b on a.branch_id = b.BranchID ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $branches = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = [];

    $now = new DateTime();
    foreach($branches as $branch) {
        $b_temp = [
            "branch_id" => $branch["branch_id"],
            "branch_name" => $branch["branchname"],
            "rooms" => []
        ];
        $query = "select distinct room_no, roomtype_id from available_movies where movie_id = $target and date(startTime) = '$show_date'  and branch_id = ".$branch["branch_id"];
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($rooms as $room) {
            switch($room["roomtype_id"]){
                case 1: $room_name = "LED 2D"; break;
                case 2: $room_name = "3D"; break;
                default: $room_name = "4DX"; break;
            }

            $r_temp = [
                "room_no" => $room["room_no"],
                "roomtype_id" => $room["roomtype_id"],
                "room_name" => $room_name,
                "movies" => []
            ];
            $query = "select id, movie_id, startTime, endTime from available_movies where movie_id = $target and date(startTime) = '$show_date'  and branch_id = ".$branch["branch_id"]." and room_no = ".$room["room_no"]." order by startTime";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $active = true;
            foreach($movies as $movie) {
                $datetime = new DateTime($movie["startTime"]);
                $movie["showtime"] = $datetime->format("H:i");
                if($datetime >= $now) {
                    if($active){
                        $movie["status"] = "btn-primary active";
                        $active = false;
                    } else{
                        $movie["status"] = " btn-dark";//btn-outline-primary
                    }
                }else{
                    $movie["status"] = " inactive ";
                }
                array_push($r_temp["movies"], $movie);
            }
            array_push($b_temp["rooms"], $r_temp);
        }
        array_push($result, $b_temp);
    }

    // ret 1
    $service->result = $result;
    $service->partial("layouts/group1/branch_each.php");
});
