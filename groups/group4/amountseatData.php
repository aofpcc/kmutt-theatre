<?php
$klein->respond('GET', '/showAmountseat', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query1 = "select sr.id, b.BranchName, r.room_no, sr.all_seat_row, sr.all_seat_no 
    from G04_MSRnB_seatPerRoom sr,G14_Branch b,G04_MSRnB_room r
    where r.branch_id = b.BranchID and r.id = sr.room_id;";


    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $service->SRdata = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $service->render("layouts/group4/addshowtime/showAmountseat.php");
});