<?php
$klein->respond('GET', '/kmutt/ticket', function ($request, $response, $service) use ($database) {
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $movie_id = '2';
  $movie_name = 'Fantastic Beast2 : Crimes of Grindelwald';
  $theatre_no = '5';
  $showtime = time();
  $seats = array();


  $service->seats = $seats;
  $service->movie_name = $movie_name;
  $service->showtime = $showtime;
  $service->theatre_no = $theatre_no;
    $service->render('layouts/group1/ticket.php');
});
