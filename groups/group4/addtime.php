<?php
  $klein->respond('GET', '/add_showtime', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
  
    $query = "SELECT * FROM 'G04_MSRnB_showingroom'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
  
    $result = mysql_query($conn , $query) ;
