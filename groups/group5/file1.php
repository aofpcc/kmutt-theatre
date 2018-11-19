<?php
// member information
$klein->respond('GET', '/membership', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

<<<<<<< HEAD
  $service->render('layouts/group5/membership.php');
});
=======
<<<<<<< HEAD
=======
  $query = "SELECT * from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();
>>>>>>> web_customer

// chage username
$klein->respond('GET', '/change/username', function ($request, $response, $service) {
  $service->render('layouts/group5/changeUsername.php');
});

<<<<<<< HEAD
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

// chage username
$klein->respond('GET', '/change/username', function ($request, $response, $service) {
  $service->render('layouts/group5/changeUsername.php');
});

// change password
$klein->respond('GET', '/change/password', function ($request, $response, $service) {
  $service->render('layouts/group5/changePassword.php');
});

=======
  $service->allMovies = $arr;
  $service->pageTitle = 'Fish and Chips';
>>>>>>> web_customer
  $service->render('layouts/group5/membership.php');
});

// chage username
$klein->respond('GET', '/change/username', function ($request, $response, $service) {
  $service->render('layouts/group5/changeUsername.php');
});

// change password
$klein->respond('GET', '/change/password', function ($request, $response, $service) {
  $service->render('layouts/group5/changePassword.php');
});

>>>>>>> web_customer
// Change email
$klein->respond('GET', '/change/email', function ($request, $response, $service) {
  $service->render('layouts/group5/changeEmail.php');
});

// Change phone number
$klein->respond('GET', '/change/phonenumber', function ($request, $response, $service) {
  $service->render('layouts/group5/changePhoneNumber.php');
<<<<<<< HEAD
=======
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
>>>>>>> web_customer
});
