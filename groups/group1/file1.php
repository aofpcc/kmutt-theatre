<?php
$klein->respond('GET', '/group1', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT price from ticket";
  $stmt = $conn->prepare($query);

  
 ?>
