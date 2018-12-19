<?php
$klein->respond('GET', '/kmutt/ticket/ticket_history', function ($request, $response, $service, $app, $validator) use($database) {
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  
    $service->render('layouts/group1/ticket_history.php');
});
