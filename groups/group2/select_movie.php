<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home/select_movie', function ($request, $response, $service){
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT movie_id from G04_MSRnB_showingroom";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Movie Selection';

  $service->render('layouts/group2/selectmovie.php');
});?>
