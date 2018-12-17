<?php
$klein->respond('GET','/promotion/edit', function($request, $response, $service, $app, $valiator) {
    $service->title = "Edit Promotion";
    $service->bootstrap3 = false;
    $service->render("layouts/group8/searchpromotion.php");
    
});


// $klein->respond('POST', '/promotion/edit', function($request, $response, $service, $app, $valiator) {
//     $name = $request->promotion_name;
//     $dis = $request->promotion_dis;
//     $des = $request->promotion_des;
//     $start = $request->promotion_start;
//     $end = $request->promotion_end;

//     global $database;
//     $conn = $database->getConnection();

//     try {
//         $sql = "INSERT INTO G08_Promo_main(PromoName,Description,Discount,StartDate,EndDate)
//           VALUES ('$name', '$des','$dis','$start','$end')";
//         // use exec() because no results are returned 
//         $conn->exec($sql);
//         $service->flash("Success to add promotion $name");
//     } catch (PDOException $e) {
//         $service->flash("Failed to add promotion");
//     }
//     $service->render("layouts/group8/editpromotion.php");
//     // $response->redirect("/emp/promotion/add");
//     // $response->sendHeaders();
// });
$klein->respond('POST','/promotion/edit2', function($request, $response, $service, $app, $valiator) {

    $service->render("layouts/group8/editpromotion.php");
    $name = $request->PromoNameEdit;
    global $database;
    $conn = $database->getConnection();
    $sql = "SELECT * FROM G08_Promo_Main WHERE 'PromoName' ='$name'";
    $conn->exec($sql);

    echo $sql ;

    
    // $response->redirect("/emp/promotion/add");
    // $response->sendHeaders();
});