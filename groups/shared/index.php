<?php
$klein->respond('GET', '/', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $service->pageTitle = 'Home';
  $service->render('layouts/shared/home.php');
});


$klein->respond('GET', '/register', function($request, $response, $service, $app, $validator){
  $service->render('layouts/shared/test_login.php');
});
