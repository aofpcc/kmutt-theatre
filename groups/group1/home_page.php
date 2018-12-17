<?php
$klein->respond('GET', '/kmutt_home', function ($request, $response, $service) use ($database) {
  $service->bootstrap3 = false;
  $conn = $database->getConnection();
  $query = "select distinct id, title from G09_Movie";
  $movie = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

  
  $service->movies =  $movie;
  $service->render('layouts/group1/kmutt_home.php');
});
