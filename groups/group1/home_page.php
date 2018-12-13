<?php
$klein->respond('GET', '/kmutt_home', function ($request, $response, $service) use ($database) {
  $service->bootstrap3 = false;  
  $conn = $database->getConnection();
    //$d = $app->login->requireLogin('customer');

    $service->render('layouts/group1/kmutt_home.php');
});
