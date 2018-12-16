<?php
$klein->respond('GET', '/kmutt_home/branch', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    //$d = $app->login->requireLogin('customer');

    $query = $conn->query("SELECT BranchName FROM G14_Branch")->fetchAll(PDO::FETCH_BOTH);

    $service->query = $query;
    $service->render('layouts/group1/select_branch.php');
});

$klein->respond('GET', '/kmutt_home/branch2', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    $query = $conn->query("SELECT BranchName FROM G14_Branch")->fetchAll(PDO::FETCH_BOTH);

    $service->query = $query;
    $service->render('layouts/group1/select_branch2.php');
});

$klein->respond('GET', '/movies/showtime/all/[:movie_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();

    $target = $request->movie_id;
    
    $query = "select a.branch_id, b.branchname 
    from (select distinct branch_id
    from available_movies where movie_id = $target) a join G14_Branch b on a.branch_id = b.BranchID ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    
    $branches = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = [];
    foreach($branches as $branch) {
        $b_temp = [
            "branch_id" => $branch["branch_id"],
            "branch_name" => $branch["branchname"],
            "rooms" => []
        ];
        $query = "select distinct room_no, roomtype_id from available_movies where movie_id = $target and branch_id = ".$branch["branch_id"];
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($rooms as $room) {
            $r_temp = [
                "room_no" => $room["room_no"],
                "roomtype_id" => $room["roomtype_id"],
                "movies" => []
            ];
            $query = "select id, movie_id, startTime, endTime from available_movies where movie_id = $target and branch_id = ".$branch["branch_id"]." and room_no = ".$room["room_no"];
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($movies as $movie) {
                array_push($r_temp["movies"], $movie);
            }
            array_push($b_temp["rooms"], $r_temp);
        }
        array_push($result, $b_temp);
    }

    return $response->json($result);
});