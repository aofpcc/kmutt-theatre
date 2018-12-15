<?php
$klein->respond('GET', '/group14', function ($request, $response, $service) {
  
  global $database;
  $conn = $database->getConnection();

  //$query = "SELECT  from movies";
 // $stmt = $conn->prepare($query);
 // $stmt->execute();
  $sql = "SELECT  BranchName, Longitude, Latitude FROM Branch";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = array();
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $data[] = $row;
    }
  }
  //$num = $stmt->rowCount();
  //if($num >0){
   // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     // extract($row);
      //echo "id : ".$id.", name : ".$name."\n";
   // }
  //}
  die;
  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group14/home.php');
});

$klein->respond('GET', '/group14/map', function ($request, $response, $service) {
  $service->bootstrap3 = false;
  global $database;
  $conn = $database->getConnection();

  $sql = "SELECT  b.BranchName, c.Longitude, c.Latitude, b.BranchID 
          FROM G14_Branch as b , G14_BranchCoords as c
          where b.LatLngID = c.CoordID";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();
  //if($stm->rowcount() > 0){
   // while($row = mysqli_fetch_assoc($result)){
   //   $data[] = $row;
   // }
  //}
  $service->guy = $data;
  $service->render('layouts/group14/map.php');
});