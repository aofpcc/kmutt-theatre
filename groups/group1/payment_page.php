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
  $service->showtime_id = $request->showtime_id;
  $query_showtime = $conn->query("select movie_id, room_id, date(startTime) as startDate,
  time(startTime) as startTime from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $id_movie = $query_showtime[0]["movie_id"];

  $query_movie = $conn->query("select title, Image,length from G09_Movie where id = '".$id_movie."';")
  ->fetchAll(PDO::FETCH_ASSOC);

  //$date = DateTime::createFromFormat('Y-m-d', $query_showtime[0]["startDate"]);
  //$date = date_format($query_showtime[0]["startDate"], 'd-m-y');;
  $times = date('g:ia', strtotime($query_showtime[0]["startTime"]));
  //$time = date_format($query_showtime[0]["startTime"], 'G:ia');
  $temp = new DateTime($query_showtime[0]["startDate"]);
  $month = $temp->format("F");
  $dates = $temp->format("d")." ".$month." ".$temp->format("Y");

  $title = $query_movie[0]["title"];
  $image = $query_movie[0]["Image"];
  $length = $query_movie[0]["length"];
  $theatre_no = $query_showtime[0]["room_id"];
  // $dates = $date;
  // $times = $time;

  $service->title = $title;
  $service->image = $image;
  $service->length = $length;
  $service->theatre_no = $theatre_no;
  $service->date = $dates;
  $service->time = $times;

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
        // $showtime = $this->showtime_id;
        $deadline = strtotime('now + 10 minutes');

        // $response->dump($room_no);
        // $response->sendBody();
        // die;
        $theatre_no = $room_no[0]["room_id"];
        $movie_id = $id_movie[0]["movie_id"];


        // $array = json_decode(json_encode($seats), true);
        // foreach ($array as $result) {
        //   $row = $result['row'];
        //   $seat = $result['seat'];

          $select_chair = $conn->query("select selected_seat from G01_Booking where movie_id = $movie_id and showtime_id = $request->showtime_id;")
          ->fetchAll(PDO::FETCH_ASSOC);

          $result = [];
          foreach ($select_chair as $value) {
            $str = $value["selected_seat"];
            array_push($result, $str);
          }

          // var_dump($result);
          // die;



          // $response->dump($movie_id);
          // $response->dump($request->showtime_id);
          // $response->dump($select_chair);
          // $response->dump($selectedSeats);
          // $response->sendBody();
          // die;

          for($j = 0;$j < count($selectedSeats);$j++){
            for($i = 0;$i < count($result);$i++){
              echo "selectedSeats[$i] = select_chair[$j] ? <br/>";
              if(strcmp($selectedSeats[$j], $result[$i]) == 0){
                throw new Exception("unavailable seat");
                // echo "unavailable seat";

                //echo "$selectedSeats[$i] = $select_chair[$j] ? <br/>";
                // echo "yep <br/>";
                //  $service->flash("unavailable seat");
                // $service->back();

              }
              //echo "nope <br/>";

          }
            // $seatInfo = explode('_', $selectedSeats[$j]);
            // // $s = [
              $row = $seatInfo[0];
              $seat_tic = $seatInfo[1];
            // // ];
            // // var_dump($seat);
            // // die;
            //
            $seat = $selectedSeats[$j];
              $sql = "INSERT INTO G01_Booking (status, deadline, selected_seat, booking_time, code, buyer_id, row_ticket, seat_ticket, room_id, movie_id, showtime_id)
                 values('$status',FROM_UNIXTIME($deadline), '$seat', CURRENT_TIMESTAMP, '$code', '$buyer_id', '$row', '$seat_tic', '$theatre_no', '$movie_id', '$request->showtime_id')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
          }

        $conn->commit();
      }
      catch(PDOException $e){
        //$conn->rollback();
        $service->flash($e->getMessage());
        //window.history.back();
        $service->back();
      }
      catch(Exception $e){
        //$conn->rollback();
        $service->flash($e->getMessage());
        $service->back();
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
