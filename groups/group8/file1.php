<?php
$klein->respond('GET', '/group8', function ($request, $response, $service) {
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
