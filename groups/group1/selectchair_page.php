<?php
function randomCode($length = 4) {
  $str = "";
  $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
  $max = count($characters) - 1;
  for ($i = 0; $i < $length; $i++) {
    $rand = mt_rand(0, $max);
    $str .= $characters[$rand];
  }
  return $str;
}

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

  $movie_id = $conn->query("select movie_id , room_id from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $name = $conn->query("select title, Image,length from G09_Movie where id = '".$movie_id[0]["movie_id"]."';")->fetchAll(PDO::FETCH_ASSOC);

  $date = $conn->query("select date(startTime) as startDate from G04_MSRnB_showingroom where id = '$request->showtime_id';")
  ->fetchAll(PDO::FETCH_ASSOC);

  $dateTime = $conn->query("select time(startTime) as start_time from G04_MSRnB_showingroom where id = '$request->showtime_id';")
  ->fetchAll(PDO::FETCH_ASSOC);

  $date_time = date('g:ia', strtotime($dateTime[0]["start_time"]));


  $temp = new DateTime($date[0]["startDate"]);
  //$temp1 = new DateTime($date[1]["startDate"]);
  $month = $temp->format("F");
  $service->string = $temp->format("d")." ".$month." ".$temp->format("Y");

  // $response->dump($movie_id);
  // $response->sendBody();
  // die;

  // Pass on the params to the page we're gonna render
  $service->selectedSeats = $request->selectedSeats;
  $service->length = $name[0]["length"];
  $service->name = $name[0];
  $service->movie_id = $movie_id[0];
  $service->date_time = $date_time;
  // $service->deadline = $deadline;
  // $service->movie_name = $movie_name;
  $service->showtime_id = $request->showtime_id;
  // $service->theatre_no = $theatre_no;
  // $service->pageTitle = 'Payment';
  // $service->render('layouts/group1/select_chair.php');

  //select soldSeat
   $id = $movie_id[0]["movie_id"];
  //
  $soldSeat = $conn->query("select seat_ticket from G02_Ticket_history where movie_id = $id;")
  ->fetchAll(PDO::FETCH_ASSOC);


  // var_dump($result);
  // die;

   // $query = "select seat_ticket from G02_Ticket_history where movie_id = $id;";
   // $stmt = $conn->prepare($query);
   // $stmt->execute();
   // $num = $stmt->rowCount();
   //  //echo $num;
   // $result = array();
   //
   // if($num > 0) {
   //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   //     extract($row);
   //     array_push($result, $row);
   //   }
   // }

   // var_dump($soldSeat);
   // die;
   $result = [];
   foreach ($soldSeat as $value) {
     $str = $value["seat_ticket"];
     array_push($result, $str);
   }

  $service->soldSeat = $result;

  //$service->soldSeat = ['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2'];
  $service->render('layouts/group1/select_chair.php');
});
