<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home_page/select_movie/select_time/select_seat', function ($request, $response, $service){
  global $database;
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

  $service->selectedSeats = $request->selectedSeats;

  $selectedSeats = $request->selectedSeats;
  //    if($request->selectedSeats){
  //      try{

  //        $deadline = strtotime('now + 10 minutes');

  //        $seats = array();
  //        for ($j=0; $j < count($selectedSeats) ; $j++) {
  //          $seatInfo = explode('_', $selectedSeats[$j]);
  //          $s = [
  //            'row' => $seatInfo[0],
  //            'seat' => $seatInfo[1],
  //          ];

  //          array_push($seats, $s);
  //        }
  // //echo json_encode($seats);

  //     $ticketID = '3';
  //     $status = 'booking';
  // //$time = CURRENT_TIMESTAMP;
  //     $code = 'a00';
  //     $buyer_id = '323';

  //     // $array = json_decode(json_encode($seats), true);
  //     // foreach ($array as $result) {
  //     //   $row = $result['row'];
  //     //   $seat = $result['seat'];

  //     //   $sql = "INSERT INTO G01_Booking (status, deadline, booking_time, code, buyer_id, row_ticket, seat_ticket, theater_no)
  //     //       values('$status',FROM_UNIXTIME($deadline), CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$seat', '2')";
  //     //       $stmt = $conn->prepare($sql);
  //     //       $stmt->execute();
  //     //     }

  //       //   for ($i = 0; $i < count($selectedSeats); $i++) {
  //       //     $sql = "INSERT INTO G02_Ticket_history (movie_id, showtime, seat_ticket, code)
  //       //     VALUES ('2', CURRENT_TIMESTAMP, '$selectedSeats[$i]', '$code')";
  //       //     $stmt = $conn->prepare($sql);
  //       //     $stmt->execute();
  //       //   // echo $sql.'<br>';
  //       // }

  //       $movie_id = '2';
  //       $movie_name = 'Horrible Bosses 2';
  //       $theatre_no = '5';
  //       $showtime = time();


  //     }
  //     catch(PDOException $e){

  //       echo $sql."<br>", $e->getMessage();

  //     }
  //   }


    $service->selectedSeats = $request->selectedSeats;


    
    
  // $service->soldSeat = ['1_2','4_4','4_5','4_6'];

  // $service->soldSeat = $soldSeat[0];
  $service->render('layouts/group2/selectseat.php');
});

$klein->respond('POST', '/group2/home_page/select_movie/select_time/select_seat', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $card_no = $request->card_no;

  // $query1 = "SELECT ID_Card from G05_Member_profile where ID_Card = '$card_no'";
  // $stmt1 = $conn->prepare($query1);
  // $stmt1->execute();

  // $return_no = $request->return_no;

  // // $query2 = "SELECT movie_id from G02_Ticket_history where movie_id = '$return_no'";
  // // $stmt2 = $conn->prepare($query2);
  // // $stmt2->execute();

  // $resultCount1 = $stmt1->rowCount();
  // // $resultCount2 = $stmt2->rowCount();

  // if ($resultCount1 == 1) {
  //     // echo("founf]d it");
      $response->redirect('/emp/group2/home_page/select_movie/select_time/select_seat/pay_ment');
  //     $response->send();
  // } else {
  //     echo("Invalid Information !!");
  //     // $response->redirect('/group2/home_page/select_movie/select_time/select_seat/done');
  //     // $response->send();
  // }
  // // $service->pageTitle = 'KMUTT THEATRE | Member';

  // // $service->render('layouts/group2/returnticket.php');
});