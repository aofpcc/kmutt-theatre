<?php
// member information
$klein->respond('POST', '/membership', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $service->render('layouts/group5/membership.php');
});

// chage username
// $klein->respond('GET', '/change/username', function ($request, $response, $service) {
//   $service->render('layouts/group5/changeUsername.php');
// });

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

// member information
$klein->respond('GET', '/login', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $query = "SELECT * from movies";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  //$service->allMovies = $arr;
  $service->pageTitle = 'Fish and Chips';
  $service->render('layouts/group5/login.php');
});


// Drive-Register
$klein->respond('GET', '/register', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $query = "SELECT * from movies";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  //$service->allMovies = $arr;
  $service->pageTitle = 'Fish and Chips';
  $service->render('layouts/group5/register.php');
});
