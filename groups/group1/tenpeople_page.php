<?php
$klein->respond('GET', '/kmutt_home/branch/show_time/select_chair/ten_booking', function ($request, $response, $service)  use($database){
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $service->render('layouts/group1/tenpeople.php');
});
