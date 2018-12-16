<?php
$klein->respond('GET', '/kmutt_home/branch/show_time', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    $query_date = $conn->query("SELECT DISTINCT date(startTime) FROM G04_MSRnB_showingroom WHERE movie_id = 3")->fetchAll(PDO::FETCH_BOTH);
    $query_time = $conn->query("SELECT DISTINCT date_format(startTime, '%H:%i') AS time_movie FROM G04_MSRnB_showingroom WHERE movie_id = 3")->fetchAll(PDO::FETCH_BOTH);


    $service->query_date = $query_date;
    $service->query_time = $query_time;
    $service->render('layouts/group1/select_time.php');
    $conn = null;

});

//select date(startTime), date_format(startTime, '%H:%i') from G04_MSRnB_showingroom;
