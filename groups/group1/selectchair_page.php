<?php
$klein->respond('GET', '/kmutt_home/branch/show_time/select_chair/[:showtime_id]', function ($request, $response, $service)  use($database){
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  // $x = $request->showtime_id;
  // var_dump($x);
  // die;

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

  // Pass on the params to the page we're gonna render
     $service->selectedSeats = $request->selectedSeats;
  //    $selectedSeats = $request->selectedSeats;
  //    if($request->selectedSeats){
  //      try{
  //
  //        $deadline = strtotime('now + 10 minutes');
  //        $seats = array();
  //        for ($j=0; $j < count($selectedSeats) ; $j++) {
  //          $seatInfo = explode('_', $selectedSeats[$j]);
  //          $s = [
  //            'row' => $seatInfo[0],
  //            'seat' => $seatInfo[1],
  //          ];
  //
  //          array_push($seats, $s);
  //        }
  //
  // //echo json_encode($seats);
  //
  // //     $ticketID = '3';
  // //     $status = 'booking';
  // // //$time = CURRENT_TIMESTAMP;
  // //     $code = 'a00';
  // //     $buyer_id = '323';
  //
  //     // $array = json_decode(json_encode($seats), true);
  //     // foreach ($array as $result) {
  //     //   $row = $result['row'];
  //     //   $seat = $result['seat'];
  //
  //       // $sql = "INSERT INTO G01_Booking (status, deadline, booking_time, code, buyer_id, row_ticket, seat_ticket, theater_no)
  //       //     values('$status',FROM_UNIXTIME($deadline), CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$seat', '2')";
  //       //     $stmt = $conn->prepare($sql);
  //       //     $stmt->execute();
  //         //}
  //
  //       //   for ($i = 0; $i < count($selectedSeats); $i++) {
  //       //     $sql = "INSERT INTO G02_Ticket_history (movie_id, movie_name, showtime, seat_no, code)
  //       //     VALUES ('2', 'bye', CURRENT_TIMESTAMP, '$selectedSeats[$i]', '$code')";
  //       //     $stmt = $conn->prepare($sql);
  //       //     $stmt->execute();
  //       //   // echo $sql.'<br>';
  //       // }
  //
  //       // $movie_id = '2';
  //       // $movie_name = 'Horrible Bosses 2';
  //       // $theatre_no = '5';
  //       $showtime = time();
  //
  //
  //     }
  //     catch(PDOException $e){
  //
  //       echo $sql."<br>", $e->getMessage();
  //
  //     }
  //       $service->seats = $seats;
  //   }

    $movie_id = $conn->query("select movie_id from G04_MSRnB_showingroom where id = '$request->showtime_id';")->fetchAll(PDO::FETCH_ASSOC);
    $name = $conn->query("select title from G09_Movie where id = '".$movie_id[0]["movie_id"]."';")->fetchAll(PDO::FETCH_ASSOC);

    $date = $conn->query("select date(startTime) as startDate from G04_MSRnB_showingroom where id = '$request->showtime_id';")
    ->fetchAll(PDO::FETCH_ASSOC);

    // $response->dump($movie_id);
    // $response->sendBody();
    // die;

    $temp = new DateTime($date[0]["startDate"]);
    $month = $temp->format("F");
    $service->string = $temp->format("d")." ".$month." ".$temp->format("Y");

    // Pass on the params to the page we're gonna render
    $service->selectedSeats = $request->selectedSeats;
    $service->name = $name[0];
    $service->movie_id = $movie_id[0];
    //$service->seats = $seats;
    // $service->deadline = $deadline;
    // $service->movie_name = $movie_name;
    // $service->showtime = $showtime;
    // $service->theatre_no = $theatre_no;
    // $service->pageTitle = 'Payment';
    // $service->render('layouts/group1/select_chair.php');

  // $movie_id = '1';
  // $theatre_no = '3';
  // $branch = '1';
  // $showtime = TIME("00:00:00");
  // $dates = '0000-00-00';
  //
  // $query = "SELECT seat_no FROM ticket WHERE movie_id = '$movie_id' AND theatre_no = '$theatre_no'
  //           AND branch = '$branch'";
  // //echo $query;
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  // $num = $stmt->rowCount();
  //
  // $result = array();
  //
  // if($num > 0) {
  //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  //     extract($row);
  //     array_push($result, $seat_no);
  //   }
  // }

  // $query = array("SELECT seat_no from Booking");

  // $service->soldSeat = $result;

 $service->soldSeat = ['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2'];
  $service->render('layouts/group1/select_chair.php');
});
