 <?php
$klein->respond('GET', '/promotion/add', function($request, $response, $service, $app, $valiator) {
    $service->title = "Add Promotion";
    $service->bootstrap3 = false;
    $service->render("layouts/group8/addpromotion.php");
});


$klein->respond('POST', '/promotion/add', function($request, $response, $service, $app, $valiator) {
    $name = $request->promotion_name;
    $dis = $request->promotion_dis;
    $des = $request->promotion_des;
    $start = $request->promotion_start;
    $end = $request->promotion_end;
    global $database;
    $conn = $database->getConnection();

    try {
        $sql = "INSERT INTO G08_Promo_main(PromoName,Description,Discount,StartDate,EndDate)
          VALUES ('$name', '$des','$dis','$start','$end')";
        // use exec() because no results are returned 
        $conn->exec($sql);
        $service->flash("Success to add promotion $name");
    } catch (PDOException $e) {
        $service->flash("Failed to add promotion");
    }
    $response->redirect("/emp/promotion/add");
    $response->sendHeaders();
});