<?php
// $klein->respond('GET','/promotion/edit', function($request, $response, $service, $app, $valiator) {
//     $service->title = "Edit Promotion";
//     $service->bootstrap3 = false;
//     $service->render("layouts/group8/searchpromotion.php");
    
// });


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
$klein->respond('GET','/promotion/edit/[:promo_id]', function($request, $response, $service, $app, $valiator) {
    global $database;
    $conn = $database->getConnection();
    $sql = "SELECT * FROM G08_Promo_main WHERE PromoID = :promo_id";
    $stmt = $conn->prepare($sql);
    $promo_id = $request->promo_id; 
    $stmt->bindParam(":promo_id", $promo_id);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
    $a = new DateTime($data["StartDate"]);
    $b = new DateTime($data["EndDate"]);
    $data["StartDate"] = $a->format('Y-m-d\TH:i:s');
    $data["EndDate"] = $b->format('Y-m-d\TH:i:s');

    $service->passedID=$request->promo_id;
    // $response->dump($data)->send();
    // die;
    // $service->title = "Edit Promotion [:promo_name]";
    // $service->bootstrap3 = false; 
    $service->data = $data;
    $service->render("layouts/group8/editpromotion.php");
});
$klein->respond('POST','/promotion/edit/[:promo_id]', function($request, $response, $service, $app, $valiator) {
    global $database;
    $conn = $database->getConnection();
    $stmt = $conn->prepare("UPDATE G08_Promo_main
    SET PromoName = :promotion_name, Description = :promotion_des, Discount = :promotion_dis,
    PromoCode =:promotion_code,  StartDate = :promotion_start,EndDate = :promotion_end
     WHERE PromoID = :promo_id;");

    $promo_id = $request->promo_id;
    $name = $request->promotion_name;
    $des = $request->promotion_des;
    $dis = $request->promotion_dis;
        $start_date = $request->promotion_start;
        $end_date = $request->promotion_end;
        $code = $request->promotion_code;
        // $link = $_POST['link'];
        // var_dump($des);
        // die;
    
    $stmt->bindParam(":promo_id", $promo_id);
    $stmt->bindParam(':promotion_name', $name);
    $stmt->bindParam(':promotion_des', $des);
        $stmt->bindParam(':promotion_dis', $dis);
        $stmt->bindParam(':promotion_start', $start_date);
        $stmt->bindParam(':promotion_end', $end_date);
        $stmt->bindParam(':promotion_code', $code);
        
    $stmt -> execute();
    // $service->render("layouts/group8/DB/Promotion1.php");
    $response->redirect("/emp/group8");
        $response->sendHeaders();
});
?>