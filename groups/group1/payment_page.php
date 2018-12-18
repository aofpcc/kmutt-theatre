<?php

function randomCode1($length = 4) {
  $str = "";
  $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
  $max = count($characters) - 1;
  for ($i = 0; $i < $length; $i++) {
    $rand = mt_rand(0, $max);
    $str .= $characters[$rand];
  }
  return $str;
}

$klein->respond('POST', '/kmutt_home/branch/show_time/select_chair/payment/[:showtime_id]',
function ($request, $response, $service)  use($database){
  $service->bootstrap3 = false;

  $conn = $database->getConnection();
  // Check submitted params
  //  $request->validate('selectedSeats')->notNull();

  // $x = $request->seats;
  // var_dump($x);
  // die;

  //  // Pass on the params to the page we're gonna render
  $service->selectedSeats = $request->selectedSeats;
  // $response->dump($request);
  // $response->sendBody();
  // die;

  // // Render the page

  //ADD ticket when booking in table "booking"
  $selectedSeats = $request->selectedSeats;
  if(isset($_POST['book_seat'])){
    if($request->selectedSeats){
      try{

        $seats = array();
        for ($j=0; $j < count($selectedSeats) ; $j++) {
          $seatInfo = explode('_', $selectedSeats[$j]);
          $s = [
            'row' => $seatInfo[0],
            'seat' => $seatInfo[1],
          ];

          array_push($seats, $s);
        }
        //echo json_encode($seats);
        $id_movie = $conn->query("select movie_id from G04_MSRnB_showingroom where id = $request->showtime_id;")->
        fetchAll(PDO::FETCH_ASSOC);
        $room_no = $conn->query("select room_id from G04_MSRnB_showingroom where id = $request->showtime_id;")->
        fetchAll(PDO::FETCH_ASSOC);

        $str = randomCode1();
        // var_dump($str);
        // die;

        $status = 'booking';
        $code = $str ;
        $buyer_id = '323';
        $deadline = strtotime('now + 10 minutes');

        // $response->dump($room_no);
        // $response->sendBody();
        // die;
        $theatre_no = $room_no[0]["room_id"];
        $movie_id = $id_movie[0]["movie_id"];


        $array = json_decode(json_encode($seats), true);
        foreach ($array as $result) {
          $row = $result['row'];
          $seat = $result['seat'];


          //$seat = array();
          // $soldSeat = $conn->query("select seat_ticket from G02_Ticket_history where movie_id = $id;")
          // ->fetchAll(PDO::FETCH_ASSOC);
          for ($i=0; $i < count($selectedSeats); $i++) {
            $seat = $selectedSeats[$i];
            // var_dump($seat);
            // die;
            $sql = "INSERT INTO G01_Booking (status, deadline, selected_seat, booking_time, code, buyer_id, row_ticket, seat_ticket, room_id, movie_id)
            values('$status',FROM_UNIXTIME($deadline), $seat, CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$seat', '$theatre_no', '$movie_id')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
          }
          // var_dump($selectedSeats[1]);
          // die;
        }

      }
      catch(PDOException $e){

        echo $sql."<br>", $e->getMessage();

      }
    }
  }

  // var_dump($seats[0]);
  // die;
  // // Pass on the params to the page we're gonna render
  //$service->selectedSeats = $request->selectedSeats;
  // $service->pageTitle = 'Payment';
  $service->seats = $seats;
  $service->render('layouts/group1/payment.php');

  // var_dump($seats[0]);
  // die;
  // $response->redirect('/customer/kmutt_home/branch/show_time/select_chair/payment');
});

?>
