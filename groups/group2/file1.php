<?php
$klein->respond('GET', '/group2/home', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query("SELECT * FROM movies")->fetchAll(PDO::FETCH_BOTH);

  $service->pageTitle = 'KMUTT THEATRE | Get Tickets';
  $service->list = $list;
  $service->render('layouts/group2/index.php');
  $conn=null;
});
