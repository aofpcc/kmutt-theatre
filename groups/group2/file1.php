<?php
$klein->respond('GET', '/customer/ticket', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->soldSeat = $result;
  //  $service->soldSeat = ['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2'];
  $service->render('layouts/group2/payment.php');
  });
  //
  // $klein->respond('GET', '/customer/booking', function ($request, $response, $service) {
  // $service->render('layouts/group2/bookingPagee.php');
  // });
  //
  // $klein->respond('GET', '/', function ($request, $response, $service) {
  // $response->redirect("/customer/home");
  // $response->sendHeaders();
