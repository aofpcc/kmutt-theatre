<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('POST', '/kmutt_home/branch/show_time/select_chair/payment/[:showtime_id]', function ($request, $response, $service)  use($database){
  $service->bootstrap3 = false;
  $conn = $database->getConnection();
    // Check submitted params
  //  $request->validate('selectedSeats')->notNull();
   //

   //  // Pass on the params to the page we're gonna render
      $service->selectedSeats = $request->selectedSeats;

    // // Render the page

    // ADD ticket when booking in table "booking"
    // $selectedSeats = $request->selectedSeats;
    // if($request->selectedSeats){
    //   try{
    //
    //     $deadline = strtotime('now + 10 minutes');

        //
        // booking
        //
        // $ticketID = '3';
        // $status = 'booking';
        // $code = 'a00';
        // $buyer_id = '323';
        //
        // $sql = "INSERT INTO G01_Booking (status, deadline, booking_time, code, buyer_id)
        //         values('$status', FROM_UNIXTIME($deadline), CURRENT_TIMESTAMP, '$code', '$buyer_id')";

    //     $seats = array();
    //     for ($j=0; $j < count($selectedSeats) ; $j++) {
    //       $seatInfo = explode('_', $selectedSeats[$j]);
    //       $s = [
    //         'row' => $seatInfo[0],
    //         'seat' => $seatInfo[1],
    //       ];
    //
    //       array_push($seats, $s);
    //     }
    //     //echo json_encode($seats);
    //
    //     $ticketID = '3';
    //     $status = 'booking';
    //     //$time = CURRENT_TIMESTAMP;
    //     $code = 'a00';
    //     $buyer_id = '323';
    //
    //     $array = json_decode(json_encode($seats), true);
    //     foreach ($array as $result) {
    //       $row = $result['row'];
    //       $seat = $result['seat'];
    //
    //       $sql = "INSERT INTO G01_Booking (status, deadline, booking_time, code, buyer_id, row_ticket, seat_ticket, theater_no)
    //               values('$status',FROM_UNIXTIME($deadline), CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$seat', '2')";
    //       $stmt = $conn->prepare($sql);
    //       $stmt->execute();
    //     }
    //
    //     for ($i = 0; $i < count($selectedSeats); $i++) {
    //       $sql = "INSERT INTO G02_Ticket_history (movie_id, movie_name, showtime, seat_no, code)
    //               VALUES ('2', 'bye', CURRENT_TIMESTAMP, '$selectedSeats[$i]', '$code')";
    //               $stmt = $conn->prepare($sql);
    //               $stmt->execute();
    //             // echo $sql.'<br>';
    //      }
    //
    //     $movie_id = '2';
    //     $movie_name = 'Horrible Bosses 2';
    //     $theatre_no = '5';
    //     $showtime = time();
    //
    //   }
    //   catch(PDOException $e){
    //
    //     echo $sql."<br>", $e->getMessage();
    //
    //   }
    // }
    //
    // // Pass on the params to the page we're gonna render
    // $service->selectedSeats = $request->selectedSeats;
    // $service->seats = $seats;
    // $service->deadline = $deadline;
    // $service->movie_name = $movie_name;
    // $service->showtime = $showtime;
    // $service->theatre_no = $theatre_no;
    // $service->pageTitle = 'Payment';
    // $service->render('layouts/group1/payment.php');

    // $response->redirect('/customer/kmutt_home/branch/show_time/select_chair/payment');
  });

$klein->respond('GET', '/kmutt_home/branch/show_time/select_chair/payment/action', function ($request, $response, $service, $app) {
  $service->bootstrap3 = false;
  $service->render('layouts/group1/payment.php');
});

?>
