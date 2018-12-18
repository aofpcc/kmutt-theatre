<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home_page/select_movie', function ($request, $response, $service) use ($database) {
  
  $conn = $database->getConnection();

  $query = "select distinct id, title , Image from G09_Movie";
  $movie = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

  $service->movies =  $movie;

  $service->render('layouts/group2/selectmovie.php');
});?>
