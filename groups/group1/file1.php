<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('GET', '/customer/home', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();

  $service->seatMap = [  //Seating chart
    'aaaaaaaaaa',
    'aaaaaaaaaa',
    '__________',
    '__aaaaaa__',
    'aaaaaaaaaa',
    'aaaaaaaaaa',
    'aaaaaaaaaa',
    'aaaaaaaaaa',
    'aaaaaaaaaa',
    '__aaaaaa__'
  ];

  $movie_id = '1';
  $theatre_no = '3';
  $branch = '1';
  $showtime = TIME("00:00:00");
  $dates = '0000-00-00';

  $query = "SELECT seat_no FROM ticket WHERE movie_id = '$movie_id' AND theatre_no = '$theatre_no'
            AND branch = '$branch'";
  //echo $query;
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();

  $result = array();

  if($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      array_push($result, $seat_no);
    }
  }

  // $query = array("SELECT seat_no from Booking");

  // $service->soldSeat = $result;

 $service->soldSeat = ['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2'];
  $service->render('layouts/group1/home.php');
});

// $klein->respond('GET', '/customer/booking', function ($request, $response, $service) {
//   $service->render('layouts/group1/bookingPagee.php');
// });
//
// $klein->respond('GET', '/', function ($request, $response, $service) {
//   $response->redirect("/customer/home");
//   $response->sendHeaders();
// });
