<?php
$klein->respond('GET', '/kmutt/ticket', function ($request, $response, $service) use ($database) {
  $service->bootstrap3 = false;  
  $conn = $database->getConnection();

    $service->render('layouts/group1/ticket.php');
});
