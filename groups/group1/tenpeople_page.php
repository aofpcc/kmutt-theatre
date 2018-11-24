<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/kmutt_home/branch/show_time/select_chair/ten_booking', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();

  $service->render('layouts/group1/tenpeople.php');
});
