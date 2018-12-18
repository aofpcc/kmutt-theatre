<?php
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

    $name = $conn->query("select distinct title, Image, detail,length from G09_Movie where id = '$request->movie_id'")->fetchAll(PDO::FETCH_ASSOC);

    $details = $conn->query("select detail from G09_Movie where id = '$request->movie_id'")->fetchAll(PDO::FETCH_ASSOC);

    $genre = $conn->query("select distinct genre from G09_Genre_Movie where id = '$request->movie_id'")->fetchAll(PDO::FETCH_ASSOC);
    
    // $response->dump($name);
    // $response->sendBody();
    // die;
    // var_dump($name);
    // die;

    $service->name = $name[0];
    $service->photo = $name[0];
    // $service->detail = $name[0];
    $service->datenow = (new DateTime)->format("Y-m-d");
    $service->query = $date;
    $service->length = $name[0]["length"];
    $service->movie_id = $request->movie_id;
    // var_dump($service->detail);
    // die;
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
        $query = "select distinct room_no, b.roomtype from available_movies a
        join G04_MSRnB_theaterInfo c on a.theaterinfo_id = c.id
        join G04_MSRnB_roomtype b
        on c.roomtype_id = b.id where a.movie_id = $target and date(startTime) = '$show_date'  and a.branch_id = ".$branch["branch_id"];
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($rooms as $room) {
            $r_temp = [
                "room_no" => $room["room_no"],
                "roomtype" => $room["roomtype"],
                "room_name" =>$room["roomtype"],
                "movies" => []
            ];
            $query = "select id, movie_id, soundtrack, subtitle, startTime, endTime from available_movies where movie_id = $target and date(startTime) = '$show_date'  and branch_id = ".$branch["branch_id"]." and room_no = ".$room["room_no"]." order by startTime";
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
                    $movie["clickable"] = true;
                }else{
                    $movie["status"] = " inactive ";
                    $movie["clickable"] = false;
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
?>
