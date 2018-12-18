<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home_page/select_movie', function ($request, $response, $service) use ($database) {
  
  $conn = $database->getConnection();

  $movieid = $conn->query("SELECT id FROM G09_Movie")->fetchAll(PDO::FETCH_BOTH);
  $movietitle = $conn->query("SELECT title FROM G09_Movie")->fetchAll(PDO::FETCH_BOTH);

  $service->movieid=$movieid;
  $service->movietitle=$movietitle;

  $service->render('layouts/group2/selectmovie.php');
});?>
