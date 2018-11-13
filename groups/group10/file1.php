<?php
$klein->respond('GET', '/group10', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query("SELECT * FROM advertisement")->fetchAll(PDO::FETCH_BOTH);
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  $service->pageTitle = 'Advertisement';
  $service->list = $list;
  $service->render('layouts/group10/home.php');
  $conn = null;
});
