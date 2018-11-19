<?php
// member information
$klein->respond('GET', '/membership', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'Fish and Chips';
  $service->render('layouts/group5/membership.php');
});

$klein->respond('GET', '/www2', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'View All Movies';
  $service->render('layouts/group5/home.php');
});

// chage username
$klein->respond('GET', '/change/username', function ($request, $response, $service) {
  $service->render('layouts/group5/changeUsername.php');
});

// change password
$klein->respond('GET', '/change/password', function ($request, $response, $service) {
  $service->render('layouts/group5/changePassword.php');
});

// Change email
$klein->respond('GET', '/change/email', function ($request, $response, $service) {
  $service->render('layouts/group5/changeEmail.php');
});

// Change phone number
$klein->respond('GET', '/change/phonenumber', function ($request, $response, $service) {
  $service->render('layouts/group5/changePhoneNumber.php');
});
