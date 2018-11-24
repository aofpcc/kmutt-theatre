<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/kmutt_home', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();
  //$d = $app->login->requireLogin('customer');

  $service->render('layouts/group1/kmutt_home.php');
});
