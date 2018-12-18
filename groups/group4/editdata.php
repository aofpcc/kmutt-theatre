<?php
$klein->respond('GET', '/edit_showtime/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $id = $request->id;
    // var_dump($roomtype_id);
    // die;
    $query = " sealect * from G04_MSRnB_showingroom where id = $id";
    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $service->data = $data[0];
    $service->render("layouts/group4/addshowtime/editAmountseatdata.php");
});

$klein->respond('POST', '/g04/showTime/edit', function ($request, $response, $service, $app, $validator) {
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