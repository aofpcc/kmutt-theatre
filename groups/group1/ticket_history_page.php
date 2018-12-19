<?php
$klein->respond('POST', '/kmutt/ticket/ticket_history/[:showtime_id]', function ($request, $response, $service, $app, $validator) use($database) {
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $ticket_id = $conn->query("select ticket_id from G02_Ticket_member where UserID = $userID;")
  ->fetchAll(PDO::FETCH_ASSOC);
  //
  // var_dump($ticket_id);
  // die;

  // $seat_ticket = $conn->query("select seat_ticket, showtime_id from G02_Ticket_history where  id = $ticket;")
  // ->fetchAll(PDO::FETCH_ASSOC);

  $service->ticket_id = $ticket_id;
  $service->seats = $seats;
  $service->movie_name = $movie_name;
  $service->showtime = $showtime;
  $service->theatre_no = $theatre_no;
    $service->render('layouts/group1/ticket_history.php');
});
