<?php
$klein->respond('POST', '/layouts/DB/group8/jsonData/[:pid]', function ($request, $response, $service) {

  $service->noHeader = true;

  global $database;
  $conn = $database->getConnection();

  $id = $request->pid;


  $stmt = $conn->prepare("select * from G08_Promo_main  
                          where now() between StartDate and EndDate and PromoID=$id;");
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $a = new DateTime($data["StartDate"]);
    $b = new DateTime($data["EndDate"]);
    $data["StartDate"] = $a->format('Y-m-d\TH:i:s');
    $data["EndDate"] = $b->format('Y-m-d\TH:i:s');


  echo json_encode($data);
});
