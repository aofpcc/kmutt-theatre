<?php
$klein->respond('GET', '/group1', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();
  if($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      echo "id : ".$id.", name : ".$name."\n";
    }
  }
  die;

  $service->pageTitle = 'Hello';
  $service->render('layouts/home.php');
});

$klein->respond('GET', '/group', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();

  $result = array();

  if($num > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      array_push($result, array(
        "id" => $id,
        "name" => $name
      ));
    }
  }

  $service->pageTitle = 'Hello';
  $service->allMovies = $result;
  $service->render('layouts/group1/bookingPage.php');
});