<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home/select_movie/select_time/select_seat/done', function ($request, $response, $service){
  global $database;
  $conn = $database->getConnection();

  
  echo("Thanks u, next");
  // $query = "SELECT * from G11_Emp_staff ORDER BY Status, Firstname ASC" ;
  //   $stmt = $conn->prepare($query);
  //     $stmt->execute();
  //     $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $query = "SELECT seat_no from G02_Ticket_history";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
  //
  // $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Success!!';

  // $service->render('layouts/group2/ticket.php');
});?>
