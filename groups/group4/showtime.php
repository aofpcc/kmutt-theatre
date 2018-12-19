<?php
$klein->respond('GET', '/add_showtime', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query = "SELECT * FROM G09_Movie";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $service->movies = $stmt->fetchAll();

    $query = "select * from G14_Branch";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $service->branches = $stmt->fetchAll();
    // echo "<pre>";
    // var_dump($service->movies);
    // echo "</pre>";
    // die;

    $service->render("layouts/group4/addshowtime/addshowtime.php");
});

$klein->respond('GET', '/add_showtime/[:table]/[:movie_id]', function ($request, $response, $service, $app, $validator) {
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $movie_id = $request->movie_id;
    
    if($request->table=="Soundtrack") {
        $x = "soundtrack";
    }else{
        $x = "subtitle";
    }

    $query = "SELECT * from G09_".$request->table."_Movie WHERE id =:id order by $x asc";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $movie_id);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    // die;
    $options = [];
    if($x == "subtitle") {
        $options = [["movie_id" => "", "value" => "No Subtitle", "key" => ""]];
    }
        foreach($data as $d) {
            array_push($options, [
                "movie_id" => $d["id"],
                "value" => $d[$x],
                "key" => $d[$x]
            ]);
        }
    $service->options = $options;
    $service->partial("layouts/group4/addshowtime/option.php");
});

$klein->respond('POST', '/g04/showTime/add', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $movie_id = $request->movie_id;
    $room_id = $request->room_id;
    $startTime = $request->startTime;
    $endTime = $request->endTime;
    $soundtrack = $request->soundtrack;
    $subtitle = $request->subtitle == "" ? null : $request->subtitle;
    // var_dump($subtitle);
    // $response->dump($request);
    // $response->sendBody();
    // die;

    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $stmt = $conn->prepare("insert into G04_MSRnB_showingroom(movie_id, room_id, soundtrack, subtitle, startTime, endTime) values(:movie_id, :room_id, :soundtrack, :subtitle, :startTime, :endTime);");
        $stmt->bindParam(':movie_id', $movie_id);
        $stmt->bindParam(':room_id', $room_id);
        $stmt->bindParam(':soundtrack', $soundtrack);
        $stmt->bindParam(':subtitle', $subtitle);
        $stmt->bindParam(':startTime', $startTime);
        $stmt->bindParam(':endTime', $endTime);

        $stmt->execute();

        $service->flash("Add ShowTime Success");
    } catch (PDOException $e) {
        $service->flash("Add ShowTime Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/add_showtime");
    $response->sendHeaders();
});

