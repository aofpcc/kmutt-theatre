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

  $movie_id = $conn->query("select movie_id from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $name = $conn->query("select title from G09_Movie where id = '".$movie_id[0]["movie_id"]."';")->fetchAll(PDO::FETCH_ASSOC);

  $date = $conn->query("select date(startTime) as startDate from G04_MSRnB_showingroom where id = '$request->showtime_id';")
  ->fetchAll(PDO::FETCH_ASSOC);

  $temp = new DateTime($date[0]["startDate"]);
  $month = $temp->format("F");
  $service->string = $temp->format("d")." ".$month." ".$temp->format("Y");



  // Pass on the params to the page we're gonna render
  $service->selectedSeats = $request->selectedSeats;
  $service->name = $name[0];
  $service->movie_id = $movie_id[0];
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

   $result = [];
   foreach ($soldSeat as $value) {
     $str = $value["seat_ticket"];
     array_push($result, $str);
   }



  $service->soldSeat = $result;
  $service->render('layouts/group1/select_chair.php');
});
