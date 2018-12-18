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

$klein->respond('POST', '/kmutt_home/branch/show_time/select_chair/payment/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $app->db->getConnection();
  if(!$request->selectedSeats) {
    $service->flash("Please Select Chair");
    $service->back();
    return;
  }
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
        $conn->beginTransaction();
        $seats = array();
        for ($j=0; $j < count($selectedSeats) ; $j++) {
          $seatInfo = explode('_', $selectedSeats[$j]);
          $s = [
            'row' => $seatInfo[0],
            'seat' => $seatInfo[1],
          ];

          array_push($seats, $s);
        }

        // var_dump($selectedSeats);
        // die;
        //echo json_encode($seats);
        $id_movie = $conn->query("select movie_id from G04_MSRnB_showingroom where id = $request->showtime_id;")->
        fetchAll(PDO::FETCH_ASSOC);
        $room_no = $conn->query("select room_id from G04_MSRnB_showingroom where id = $request->showtime_id;")->
        fetchAll(PDO::FETCH_ASSOC);

        $str = randomCode1();

        // var_dump($userID);
        // die;

        $status = 'booking';
        $code = $str ;
        $buyer_id = $userID;
        // var_dump($buyer_id);
        // die;
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

          $select_chair = $conn->query("select selected_seat from G01_Booking where movie_id = $movie_id and showtime_id = $request->showtime_id;")
          ->fetchAll(PDO::FETCH_ASSOC);
          for($j = 0;$j < count($selectedSeats);$j++){
            for($i = 0;$i < count($select_chair);$i++){
              if(strcmp($selectedSeats[$i], $select_chair[$j]) == 0){
                $service->flash("unavailable seat");
                $service->back();
              }
            }
            //$seat = $select_chair[$j];
              // $sql = "INSERT INTO G01_Booking (status, deadline, selected_seat, booking_time, code, buyer_id, row_ticket, room_id, movie_id)
              //    values('$status',FROM_UNIXTIME($deadline), '$seat', CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$theatre_no', '$movie_id')";
              //   $stmt = $conn->prepare($sql);
              //   $stmt->execute();
          }
        }
        $conn->commit();
      }
      catch(PDOException $e){
        $conn->rollback();
        echo $sql."<br>", $e->getMessage();

      }
    }
  }

  // var_dump($seats[0]);
  // die;
  // // Pass on the params to the page we're gonna render
  //$service->selectedSeats = $request->selectedSeats;
  // $service->pageTitle = 'Payment';
  // $service->seats = $seats;
  $service->render('layouts/group1/payment.php');

  // var_dump($seats[0]);
  // die;
  // $response->redirect('/customer/kmutt_home/branch/show_time/select_chair/payment');
});

?>
