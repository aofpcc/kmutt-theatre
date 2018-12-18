<?php
$klein->respond('GET', '/add_amountseat', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query = "select * from G14_Branch";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $service->branches = $stmt->fetchAll();


    $query = "select * from G04_MSRnB_roomtype";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $service->roomtype = $stmt->fetchAll();


    $query = "select * from G04_MSRnB_seattype";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $service->seattype = $stmt->fetchAll();

    $service->render("layouts/group4/addshowtime/addAmountseat.php");
});


$klein->respond('GET', '/g04/add_amountseat/[:branch_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $query = "select room_no from G04_MSRnB_room WHERE branch_id = '$request->branch_id' ORDER BY room_no DESC LIMIT 1;";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll();
    return json_encode($data);
});


$klein->respond('POST', '/g04/Amountseat/add', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need


    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $conn->beginTransaction();
        $stmt = $conn->prepare("insert into G04_MSRnB_seatPerRoom(all_seat_row, all_seat_no) values(:all_seat_row, :all_seat_no);
                                insert into G04_MSRnB_room(id,branch_id,room_no) values(:id,:branch_id,:room_no);");
        $nrow = $request->all_seat_row;
        $nno = $request->all_seat_no;
        $room_id = $request->id;
        $branch_id = $request->branch_id;
        $room_id = $request->room_no;
        
        $stmt->bindParam(':all_seat_row', $nrow);
        $stmt->bindParam(':all_seat_no', $nno);
        
        $stmt->bindParam(':id', $room_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':room_no', $room_no);

        $stmt->execute();

        $conn->commit();
        $service->flash("Add Amount of seat Success");
    } catch (PDOException $e) {
        $conn->rollback();
        $service->flash("Add Amount of seat Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/add_amountseat");
    $response->sendHeaders();
});

$klein->respond('GET', '/edit_amountseat/[:id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $id = $request->id;
    // var_dump($roomtype_id);
    // die;
    $query = "select * from G04_MSRnB_seatPerRoom WHERE id = $id";
    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $service->data = $data[0];
    $service->render("layouts/group4/addshowtime/editAmountseatdata.php");
});

$klein->respond('POST', '/g04/Amountseat/edit', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $stmt = $conn->prepare("update G04_MSRnB_seatPerRoom 
        set all_seat_row =:all_seat_row, all_seat_no=:all_seat_no
        WHERE id=:id and room_id =:room_id");
        $id = $request->id;
        $room_id = $request->room_id;
        $nrow = $request->all_seat_row;
        $nno = $request->all_seat_no;

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':room_id', $room_id);
        $stmt->bindParam(':all_seat_row', $nrow);
        $stmt->bindParam(':all_seat_no', $nno);

        $stmt->execute();

        $service->flash("Edit Amount of Seat Success");
    } catch (PDOException $e) {
        $service->flash("Edit Amount of Seat Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/showAmountseat");
    $response->sendHeaders();
});