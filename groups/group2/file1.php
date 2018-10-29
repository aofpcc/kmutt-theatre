<?php
$klein->respond('GET', '/group2', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "select id, name, duration from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  var_dump($arr);
  die;

  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group2/home.php');
});
