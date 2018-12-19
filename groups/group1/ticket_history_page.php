<?php
$klein->respond('GET', '/kmutt/ticket/ticket_history', function ($request, $response, $service, $app, $validator) use($database) {
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $ticket_id = $conn->query("select seat_ticket, room_id, d.title as name
  from G02_Ticket_member a, G02_Ticket_history b, G04_MSRnB_showingroom c, G09_Movie d
  where a.ticket_id = b.id and c.id = b.showtime_id and c.movie_id = d.id and a.userID = $userID;")
  ->fetchAll(PDO::FETCH_ASSOC);

  // var_dump($ticket_id);
  // die;

  $service->ticket_id = $ticket_id;
  $service->render('layouts/group1/ticket_history.php');
});
