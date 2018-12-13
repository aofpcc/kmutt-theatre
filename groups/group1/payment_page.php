<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('POST', '/kmutt_home/branch/show_time/select_chair/payment', function ($request, $response, $service)  use($database){
  $service->bootstrap3 = false;
  $conn = $database->getConnection();


    // Check submitted params
  //  $request->validate('selectedSeats')->notNull();
   //

   //  // Pass on the params to the page we're gonna render
      $service->selectedSeats = $request->selectedSeats;

//new code
    // if ($request->selectedSeats) {
    //   try {
    //      $selectedSeats = $request->selectedSeats;
    //      $movie_id = '5';
    //      $theatre_no = '2';
    //      $branch = '3';
    //      $showtime = TIME("00:00:00");
    //      $dates = '0000-00-00';
    //      $movie_name = '4';
    //      $price = '200';
    //
    //      // echo json_encode($selectedSeats);
    //
    //      // ADD ticket for each seat
    //      for ($i = 0; $i < count($selectedSeats); $i++) {
    //        $sql = "INSERT INTO ticket (branch, movie_name, movie_id, dates, showtime, theatre_no, seat_no, price)
    //        VALUES ('$branch', '$movie_name', '$movie_id', '$dates', '$showtime', '$theatre_no', '$selectedSeats[$i]', '$price')";
    //        $stmt = $conn->prepare($sql);
    //        $stmt->execute();
    //        // echo $sql.'<br>';
    //      }
    //
    //      // INSERT TO ORDER
    //      $sql = "INSERT INTO Booking (buyer_id, order_time) values (1, CURRENT_TIMESTAMP)";
    //      $stmt = $conn->prepare($sql);
    //      $stmt->execute();
    //
    //   } catch(PDOException $e){
    //     echo $sql."<br>", $e->getMessage();
    //   }
    //
    // }
    // // Render the page

    //ADD ticket when booking in table "booking"
    $selectedSeats = $request->selectedSeats;
    if($request->selectedSeats){
      try{

        $ticketID = '3';
        $status = 'booking';
        //$time = CURRENT_TIMESTAMP;
        $code = 'a00';
        $buyer_id = '323';

        $sql = "INSERT INTO G01_Booking (ticket_id, status, time, code, buyer_id)
        values('$ticketID', '$status', CURRENT_TIMESTAMP, '$code', '$buyer_id')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // echo json_encode($selectedSeats);
        $seats = array();
        for ($i = 0; $i < count($selectedSeats); $i++) {
          $sql = "INSERT INTO G02_Ticket_history (movie_id, movie_name, showtime, seat_no, code)
                  VALUES ('2', 'bye', CURRENT_TIMESTAMP, '$selectedSeats[$i]', '$code')";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                // echo $sql.'<br>';

          $seatInfo = explode('_', $selectedSeats[$i]);
          $s = [
            'row' => $seatInfo[0],
            'seat' => $seatInfo[1],
          ];

          array_push($seats, $s);
         }

      }catch(PDOException $e){

        echo $sql."<br>", $e->getMessage();

      }
    }

    // Pass on the params to the page we're gonna render
    $service->selectedSeats = $request->selectedSeats;
    $service->seats = $seats;
    // echo json_encode($seats);
    $service->render('layouts/group1/payment.php');
  });

?>
