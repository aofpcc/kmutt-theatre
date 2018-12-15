<?php
$klein->respond('GET', '/group10', function ($request, $response, $service, $app, $validator) {
  // $service->bootstrap3 = true;
  if(empty($_SESSION['login'])) {
    $userId = $app->login->requireLogin('customer');
  }
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query("SELECT a.id AS id, status, name, type, start_date, end_date
                        FROM G10_Advertisement_info AS a,
                         G10_Advertisement_banner AS b,
                         G10_Advertisement_time AS c
                         WHERE a.id = b.id AND b.id = c.id ")->fetchAll(PDO::FETCH_BOTH);
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  $service->pageTitle = 'Advertisement';
  $service->list = $list;
  $service->render('layouts/group10/home.php');
  $conn = null;
});
