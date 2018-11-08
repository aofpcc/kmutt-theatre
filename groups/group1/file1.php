<?php
$klein->respond('GET', '/group1', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT price from ticket";
  $stmt = $conn->prepare($query);

  

  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group1/home.php');
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

$klein->respond('GET', '/customer/home', function ($request, $response, $service) {
  $service->render('layouts/group1/home.php');
});

$klein->respond('GET', '/customer/booking', function ($request, $response, $service) {
  $service->render('layouts/group1/bookingPagee.php');
});

$klein->respond('GET', '/', function ($request, $response, $service) {
  $response->redirect("/customer/home");
  $response->sendHeaders();
});
?>