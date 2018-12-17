<?php

// function randomCode1($length = 4) {
//     $str = "";
//     $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
//     $max = count($characters) - 1;
//     for ($i = 0; $i < $length; $i++) {
//       $rand = mt_rand(0, $max);
//       $str .= $characters[$rand];
//     }
//     return $str;
//   }


error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('POST', '/group2/home_page/select_movie/select_time/select_seat/pay_ment', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;

    $conn = $database->getConnection();
    
    $service->selectedSeats = $request->selectedSeats;
    
    $selectedSeats = $request->selectedSeats;
    
    $seats = array();
    for ($j=0; $j < count($selectedSeats) ; $j++) {
      $seatInfo = explode('_', $selectedSeats[$j]);
      $s = [
        'row' => $seatInfo[0],
        'seat' => $seatInfo[1],
      ];
  
      array_push($seats, $s);
    }

  
  $service->selectedSeats = $request->selectedSeats;
  $service->seats = $seats;
$service->render('layouts/group2/payment.php');
// $service->seats = $seats;

});