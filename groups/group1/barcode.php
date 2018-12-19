<?php
$klein->respond('POST', '/kmutt/ticket/barcode/[:showtime_id.]', function ($request, $response, $service, $app, $validator)  use($database){
  $userID = "".$app->login->requireLogin('customer')["userID"];

  $sql = $conn->query("select code from G02_Ticket_history where showtime_id $request->showtime_id")
  ->fetchAll(PDO::FETCH_ASSOC);
  $service->showtime_id = $showtime_id;
  $service->render('layouts/group1/ticket.php');
 ?>
