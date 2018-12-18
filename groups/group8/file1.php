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
$klein->respond('GET', '/promotion/[:ID]/[:PromoID]', function ($request, $response, $service,$app,$validator) {
  global $database;
  $conn = $database->getConnection();

  //
  // CURRENT POINTS
  //
  $sql = "SELECT totalpoint FROM G05_totalpoint where MemberId = $request->ID";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // echo json_encode($list);
  $currentPoint = $list[0]["totalpoint"];

  //
  // REQUIRED POINTS
  //
  $sql2 = "SELECT PointUsed FROM G08_Promo_main where PromoID = $request->PromoID";
  $stmt2 = $conn->prepare($sql2);
  $stmt2->execute();
  $list = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  
  // echo json_encode($list);
  $requiredPoint = $list[0]["PointUsed"];
  // $getpoint = $request->getpoint($stmt);
  // $point = $app->point->getPoint("151");

  // $point= $request->$sql2;
  if($currentPoint>=$requiredPoint){
    $newpoint = $currentPoint-$requiredPoint;
    $sql = "INSERT INTO G05_Member_Redeem_Transaction(MemberID,Point)
    VALUES('$request->ID','$newpoint')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "success";
  }
  else{
    echo "you have not enough point";
    ;
  }
});
?>
