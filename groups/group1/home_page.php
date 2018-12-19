<?php
$klein->respond('GET', '/kmutt_home', function ($request, $response, $service) use ($database) {
  $service->bootstrap3 = false;
  $conn = $database->getConnection();
  $query = "select distinct id, title , Image from G09_Movie;";
  $movie = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

  $sql = $conn->query("SELECT PromoPic FROM G08_Promo_main;")->fetchAll(PDO::FETCH_ASSOC);

  $service->movies =  $movie;
  $service->sql = $sql;
  // var_dump($sql[0]['PromoPic']);
  // die;
  $service->render('layouts/group1/kmutt_home.php');
});
