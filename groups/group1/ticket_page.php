<?php
$klein->respond('POST', '/kmutt/ticket/[:showtime_id]', function ($request, $response, $service, $app, $validator) use($database) {
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $query_showtime = $conn->query("select movie_id, room_id, date(startTime) as startDate,
  time(startTime) as startTime from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $id_movie = $query_showtime[0]["movie_id"];

  $query_movie = $conn->query("select title, Image,length from G09_Movie where id = '".$id_movie."';")
  ->fetchAll(PDO::FETCH_ASSOC);

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
  // $movie_id = '2';
  // $movie_name = 'Fantastic Beast2 : Crimes of Grindelwald';
  // $theatre_no = '5';
  // $showtime = time();
  // $seats = array();
  //
  //
  // $service->seats = $seats;
  // $service->movie_name = $movie_name;
  // $service->showtime = $showtime;
  // $service->theatre_no = $theatre_no;
    $service->render('layouts/group1/ticket.php');
});
