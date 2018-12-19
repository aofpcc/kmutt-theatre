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

$klein->respond('GET', '/kmutt_home/branch/show_time/select_chair/[:showtime_id]', function ($request, $response, $service, $app, $validator)  use($database){
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
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

  // Pass on the params to the page we're gonna render
  $service->selectedSeats = $request->selectedSeats;

  $query_showtime = $conn->query("select movie_id , room_id, date(startTime) as startDate,
  time(startTime) as startTime from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $id_movie = $query_showtime[0]["movie_id"];

  $query_movie = $conn->query("select title, Image,length from G09_Movie where id = '".$id_movie."';")
  ->fetchAll(PDO::FETCH_ASSOC);

  //$id_movie = $query_showtime[0]["movie_id"];
  $id_room =  $query_showtime[0]["room_id"];
  $startDate = $query_showtime[0]["startDate"];
  $startTime = $query_showtime[0]["startTime"];

  $title = $query_movie[0]["title"];
  $image = $query_movie[0]["Image"];
  $length = $query_movie[0]["length"];

  $soldSeat = $conn->query("select seat_ticket from G02_Ticket_history where showtime_id = '$request->showtime_id'")->
  fetchAll(PDO::FETCH_ASSOC);

  $date_time = date('g:ia', strtotime($startTime));

  $temp = new DateTime($startDate);
  $month = $temp->format("F");
  $service->string = $temp->format("d")." ".$month." ".$temp->format("Y");

  $type_seat = $conn->prepare("SELECT seattype from G04_v_showtime_seat WHERE showtime_id=:showtime_id");
  $id = $request->showtime_id;
  $type_seat->bindParam(':showtime_id', $id);
  $type_seat->execute();
  $type_seat0 = $type_seat->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($type_seat0);
  // die;

  $seat_info = $conn->prepare("select st.seatInfo as seat_info
  from G04_MSRnB_room r, G14_Branch b, G04_MSRnB_showingroom s, G04_MSRnB_theaterInfo ti, G04_MSRnB_seattype st
  where s.room_id = r.id and r.theaterinfo_id = ti.id and ti.seattype_id = st.id and r.branch_id = b.BranchID and
  s.id = :id and s.movie_id = $id_movie");
  $id = $request->showtime_id;
  $seat_info->bindParam(':id', $id);
  $seat_info->execute();
  $seat_info0 = $seat_info->fetchAll(PDO::FETCH_ASSOC);


  $price = $conn->prepare("select st.seat_price as price
  from G04_MSRnB_room r, G14_Branch b, G04_MSRnB_showingroom s, G04_MSRnB_theaterInfo ti, G04_MSRnB_seattype st
  where s.room_id = r.id and r.theaterinfo_id = ti.id and ti.seattype_id = st.id and r.branch_id = b.BranchID and
  s.id = :id and s.movie_id = $id_movie");
  $id = $request->showtime_id;
  $price->bindParam(':id', $id);
  $price->execute();
  $price0 = $price->fetchAll(PDO::FETCH_ASSOC);

  // Pass on the params to the page we're gonna render
  $service->selectedSeats = $request->selectedSeats;
  $service->id_room = $id_room;
  $service->startDate = $startDate;
  $service->startTime = $startTime;
  $service->title = $title;
  $service->image = $image;
  $service->length = $length;
  // var_dump($type_seat0);
  // die;
  $service->type_seat = $type_seat0[0]["seattype"];
  $service->seat_info = $seat_info0[0]["seat_info"];
  $service->price = $price0[0]["price"];
  // $service->length = $name[0]["length"];
  // $service->name = $name[0];
  // $service->movie_id = $movie_id[0];
  // $service->price = $price[0];
  // $service->type_seat = $type_seat[0];
  // $service->seat_info = $seat_info[0];
  $service->showtime_id = $request->showtime_id;

  // $service->theatre_no = $theatre_no;
  // $service->pageTitle = 'Payment';
  // $service->render('layouts/group1/select_chair.php');
  // var_dump($soldSeat);
  // die;

   $result = [];
   foreach ($soldSeat as $value) {
     $str = $value["seat_ticket"];
     array_push($result, $str);
   }
  //
   $service->soldSeat = $result;
  $service->render('layouts/group1/select_chair.php');
});
