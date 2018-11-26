<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/customer/kmutt_home/branch', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();

  $service->render('layouts/group1/select_branch.php');
});
