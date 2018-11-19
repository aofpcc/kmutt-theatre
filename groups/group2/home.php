<?php
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home', function ($request, $response, $service){
      global $database;
  $conn = $database->getConnection();

  $query = "SELECT MemberID from G05_Member_profile";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'KMUTT THEATRE | Member';

  $service->render('layouts/group2/member.php');
});?>
