<?php
$klein->respond('GET', '/add_seattype', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $service->render("layouts/group4/addshowtime/addseatType.php");
});

$klein->respond('POST', '/g04/seatType/add', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $seattype = $_POST['seattype'];
    $seat_price = $_POST['seatprice'];
    $seatInfo = $_POST['info'];


    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        //$stmt = $conn->prepare("insert into G04_MSRnB_seattype(seattype, seat_price, seatInfo) values("$seattype", :seat_price, :seatInfo);");
        $conn->exec("INSERT INTO G04_MSRnB_seattype(seattype, seat_price, seatInfo) 
                      VALUES('$seattype', '$seat_price', '$seatInfo')");
        $stype = $request->seattype;
        $sprice = $request->seatprice;
        $info = $request->info;


        // $stmt->bindParam(':seattype', $stype);
        // $stmt->bindParam(':seat_price', $sprice);
        // $stmt->bindParam(':seatInfo', $info);

        // $stmt->execute();

        $service->flash("Add Room Type Success");
    } catch (PDOException $e) {
        $service->flash("Add Room Type Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/add_seattype");
    $response->sendHeaders();
});

$klein->respond('GET', '/edit_roomtype/[:roomtype_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $roomtype_id = $request->roomtype_id;
    // var_dump($roomtype_id);
    // die;
    $query = "select * from G04_MSRnB_roomtype WHERE id = $roomtype_id";
    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $service->roomdata = $data[0];
    $service->render("layouts/group4/addshowtime/editRoomTypedata.php");
});

$klein->respond('POST', '/g04/roomType/edit', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $stmt = $conn->prepare("update G04_MSRnB_roomtype 
        set roomtype =:roomtype, roomInfo=:roomInfo
        WHERE id=:id");
        $id = $request->id;
        $rtype = $request->roomtype;
        $info = $request->info;

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':roomtype', $rtype);
        $stmt->bindParam(':roomInfo', $info);

        $stmt->execute();

        $service->flash("Edit Room Type Success");
    } catch (PDOException $e) {
        $service->flash("Edit Room Type Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/showRoomtype");
    $response->sendHeaders();
});