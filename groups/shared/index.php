<?php
$klein->respond('GET', '/', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $service->pageTitle = 'Home';
  $service->render('layouts/shared/home.php');
});
