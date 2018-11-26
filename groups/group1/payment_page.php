<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('POST', '/customer/kmutt_home/branch/show_time/select_chair/payment', function ($request, $response, $service)  use($database){
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
    //

     $service->render('layouts/group1/payment.php');


  });

?>
