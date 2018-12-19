<?php
$klein->respond('GET', '/kmutt/ticket/barcode/[:code]', function ($request, $response, $service, $app, $validator)  use($database){
  $app->login->requireLogin('customer');
  $conn = $app->db->getConnection();
  $data = $conn->query("SELECT * FROM G02_Ticket_history WHERE code='$request->code' and return_ticket=0");
  $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
  $service->barcode = $generator->getBarcode($request->code, $generator::TYPE_CODE_128);
  $service->code = $request->code;
  $service->render('layouts/core/getBarcode.php');
});
