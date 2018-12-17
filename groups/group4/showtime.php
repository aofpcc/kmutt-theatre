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

$klein->respond('POST', '/g04/showTime/add', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $movie_id = $request->movie_id;
    $room_id = $request->room_id;
    $startTime = $request->startTime;
    $endTime = $request->endTime;

    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $stmt = $conn->prepare("insert into G04_MSRnB_showingroom(movie_id, room_id, startTime, endTime) values(:movie_id, :room_id, :startTime, :endTime);");
        $stmt->bindParam(':movie_id', $movie_id);
        $stmt->bindParam(':room_id', $room_id);
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

