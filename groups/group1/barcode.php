<?php
$klein->respond('GET', '/kmutt/ticket/barcode/[:code]', function ($request, $response, $service, $app, $validator)  use($database){
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $app->db->getConnection();

  $sql = $conn->query("select code from G02_Ticket_history")
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":code", $code);
  $stmt->execute();
  $service->render('layouts/group1/ticket.php');
 ?>
