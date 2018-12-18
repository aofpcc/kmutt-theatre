<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home_page/select_movie/select_time', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    $query_date = $conn->query("SELECT DISTINCT date(startTime) FROM G04_MSRnB_showingroom WHERE movie_id = 3")->fetchAll(PDO::FETCH_BOTH);
    $query_time = $conn->query("SELECT DISTINCT date_format(startTime, '%H:%i') AS time_movie FROM G04_MSRnB_showingroom WHERE movie_id = 3")->fetchAll(PDO::FETCH_BOTH);
    $movietitle = $conn->query("SELECT title FROM G09_Movie")->fetchAll(PDO::FETCH_BOTH);;

    $service->query_date = $query_date;
    $service->query_time = $query_time;
    $service->movietitle = $movietitle[1];
    $service->render('layouts/group2/selecttime.php');
    // $conn = null;

  });