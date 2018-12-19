<?php
$klein->respond('POST', '/kmutt/ticket/barcode/[:code]', function ($request, $response, $service, $app, $validator)  use($database){
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $app->db->getConnection();

  $sql = $conn->query("select code from G02_Ticket_history where how_booking = 'Web';")
  ->fetchAll(PDO::FETCH_ASSOC);
  $service->code = $code;
  $service->render('layouts/group1/bar.php');
});
