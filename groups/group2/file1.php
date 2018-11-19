<?php
$klein->respond('GET', '/group2/home', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from G02_Ticket_history";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Member';

  $service->render('layouts/group2/member.php');

});

$klein->respond('GET', '/group2/booking', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from G02_Ticket_history";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Seat Selection';

  $service->render('layouts/group2/booking.php');
});
