<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('POST', '/customer/payment', function ($request, $response, $service)  use($database){
    // $conn = $database->getConnection();

    // Check submitted params
    // $request->validate('selectedSeats')->notNull();

    // Pass on the params to the page we're gonna render
    $service->selectedSeats = $request->selectedSeats;
    // $sql = "INSERT INTO ticket(seat_no, theatre_no) VALUES("")"
    // Render the page
    $service->render('layouts/group1/payment.php');
  });

?>
