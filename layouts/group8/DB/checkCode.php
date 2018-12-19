<?php
$klein->respond('GET', '/promotions/checkCode/[:code]', function ($request, $response, $service) {
    // Render the page
    $service->noHeader = true;
  
    // echo 5;
    // $service->render('layouts/group10/getdata.php');
    global $database;
    $conn = $database->getConnection();
  
    $code = $request->code;
  
    // $stmt = $conn->prepare("SELECT * FROM advertisement WHERE id = :id");
    $stmt = $conn->prepare("SELECT * FROM G08_Promo_main WHERE PromoID = :code");
    $stmt->bindParam(':code', $code);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($data);
    // echo $data;
  });