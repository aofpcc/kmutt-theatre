<?php
$klein->respond('GET', '/group2/ticket', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Get Tickets';
  $service->render('layouts/group2/home.php');
});

  $klein->respond('GET', '/group2/payment', function ($request, $response, $service) {
  $service->render('layouts/group2/payment.php');
});
