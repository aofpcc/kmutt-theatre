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

$klein->respond('GET', '/mobile/movies/all', function ($request, $response, $service) {
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

$klein->respond('GET', '/mobile/showtimes/[:movie_id]', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "select distinct date(startTime) as start_date from available_movies where movie_id = '$request->movie_id'
  order by start_date asc;";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $service->allMovies = $arr;
  // $service->pageTitle = 'Hello';
  // $service->render('layouts/group12/home.php');
  return $response->json($arr);
});