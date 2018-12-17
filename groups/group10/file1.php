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

$klein->respond('GET', '/group10/ads/[:ads_id]', function ($request, $response, $service, $app, $validator) {
  $ads_id = $request->ads_id;

  $conn = $app->db->getConnection();
  $query = "select * from G10_v_available_ads;";
  $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

  $num = count($data);
  $ran = rand(0, $num-1);

  // $response->dump($data[$ran]);
  // $response->sendBody();
  // die;

  $service->link = "https://".$data[$ran]["url"];
  $service->linkads = "/layouts/group10".$data[$ran]["banner"];
  $service->render("layouts/group10/test_ads/index.php");
});

