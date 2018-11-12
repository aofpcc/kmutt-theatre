<?php
$klein->respond('GET', '/group7', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'asdfafdsfsafasdfa';
  $service->render('layouts/group7/home.php');
});

$klein->respond('GET', '/group7/min/[:text]?', function ($req, $response, $service) {
  $service->value = $req->text;
  $service->render('layouts/group7/min.php');
});
