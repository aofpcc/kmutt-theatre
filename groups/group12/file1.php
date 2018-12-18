<?php
// $klein->respond('GET', '/group12', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();

//   $query = "SELECT * from movies";
//   $stmt = $conn->prepare($query);
//   $stmt->execute();

//   $num = $stmt->rowCount();
//   $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

//   $service->allMovies = $arr;
//   $service->pageTitle = 'Hello';
//   $service->render('layouts/group12/home.php');
// });

$klein->respond('GET', '/mobile/getShowtime', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from G09_Movie";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  // $service->pageTitle = 'Hello';
  // $service->render('layouts/group12/home.php');
  return $response->json($arr);
});
