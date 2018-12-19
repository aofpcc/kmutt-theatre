<?php
function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 6; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
    
}

// $klein->respond('GET', '/group8', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();

//   $query = "SELECT * from movies";
//   $stmt = $conn->prepare($query);
//   $stmt->execute();
//   $num = $stmt->rowCount();
//   $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

//   $service->allMovies = $arr;
//   $service->pageTitle = 'Hello';
//   $service->render('layouts/group8/New.php');
// });


//---------------------------------------------------------------------

// Move Move
$klein->respond('GET', '/group8', function ($request, $response, $service, $app, $validator) {
 $service->boostrap3 = false;
 $sql = "select * 
 from G08_Promo_main
 where now() between StartDate and EndDate;";

 $conn = $app->db->getConnection();
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
//  $response->dump($data);
//  $response->sendBody();
$service->list = $list;
$service->isManagementPage = true;
$service->promotions = $list;
  // var_dump($list);
  // die;
   $service->render('layouts/group8/DB/Promotion1.php');
 });

//---------------------------------------------------------------------

$klein->respond('GET', '/group8/N', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();
  $rand = RandomString();
  $query = "SELECT PromoName from Promotion where PromoID = 10 ";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();
  $arr = $stmt->fetch(PDO::FETCH_ASSOC);
  echo ($arr["PromoName"])."<br>";
  echo $rand ;
  try {
    $sql = "INSERT INTO CodeID (Code, Status)
    VALUES ('$rand', '1')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    { 
    echo $sql."<br>". $e->getMessage();
    }
  $service->bootstrap3 = false;
  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group8/New.php');
  
});


$klein->respond('GET', '/promotion/testjaa', function ($request, $response, $service,$app,$validator) {
  return $app->promotion->getCode();
});
$klein->respond('GET', '/promotion/procode', function ($request, $response, $service,$app,$validator) {
  return $app->promotion->usecode($memberID,$promocode);
});