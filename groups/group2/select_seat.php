<?php
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home/select_movie/select_time/select_seat', function ($request, $response, $service){
      global $database;
  $conn = $database->getConnection();

  // $query = "SELECT seat_no from G02_Ticket_history";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
  //
  // $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Seat Selection';

  $service->render('layouts/group2/booking.php');
});?>
