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
?>
