<?php
$klein->respond('GET', '/group7', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // $query = "SELECT * from movies";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  // $service->pageTitle = 'Hello';
  $service->render('layouts/group7/home.php');
});

// $servername = "localhost";
// $username = "user01";
// $password = "user01";
//
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
// 
