<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$klein->respond('GET', '/group2/home_page/select_movie/select_time/select_seat/pay_ment', function ($request, $response, $service) use ($database) {
$service->bootstrap3 = false;
$conn = $database->getConnection();


$service->render('layouts/group2/payment.php');


});

// $klein->respond('POST', '/group2/home_page/select_movie/select_time/select_seat/pay_ment', function ($request, $response, $service) use ($database) {
// $service->bootstrap3 = false;
// $conn = $database->getConnection();

// $service->selectedSeats = $request->selectedSeats;

// $selectedSeats = $request->selectedSeats;
// $seats = array();
// for ($j=0; $j < count($selectedSeats) ; $j++) {
// $seatInfo = explode('_', $selectedSeats[$j]);
//     $s = [
//       'row' => $seatInfo[0],
//       'seat' => $seatInfo[1],
//     ];

//     array_push($seats, $s);
//   }

// $service->selectedSeats = $request->selectedSeats;
// $service->seats = $seats;


// $service->render('layouts/group2/payment.php');


// });