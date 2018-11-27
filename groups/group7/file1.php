<?php
$klein->respond('GET', '/group7', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $query = "SELECT * from movies";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  // $service->pageTitle = 'Hello';
  $service->render('layouts/group7/home.php');
});
