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

$klein->respond('GET', '/group8', function ($request, $response, $service) {

  $service->render('layouts/group8/DB/Promotion1.php');
});
$klein->respond('GET', '/group8M', function ($request, $response, $service) {

  $service->render('layouts/group8/DB2/Movie1.php');
});
$klein->respond('GET', '/group8M2', function ($request, $response, $service) {

  $service->render('layouts/group8/DB2/Movie2.php');
});
$klein->respond('GET', '/group8F', function ($request, $response, $service) {

  $service->render('layouts/group8/DB2/Food1.php');
});
$klein->respond('GET', '/group8F2', function ($request, $response, $service) {

  $service->render('layouts/group8/DB2/Food2.php');
});
$klein->respond('GET', '/group8F3', function ($request, $response, $service) {

  $service->render('layouts/group8/DB2/Food3.php');
});

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
  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group8/New.php');
});
?>
