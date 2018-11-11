<?php
$klein->respond('GET', '/group6', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT name from movies";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/group6/max', function($request, $response, $service ) {

  $response->body("Max");
});

$klein->respond('GET', '/group6/login', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $user = $request->user;

  $query = "SELECT Username, Password from Membership where Username='Ay' and password='123s456'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  if ($num == 1)
    echo json_encode($arr);
  else
    echo 'error';
});
