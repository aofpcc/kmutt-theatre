<?php
$klein->respond('GET', '/showAmountseat', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query1 = "select sr.id, b.BranchName, r.room_no, rt.roomtype, st.seattype, st.seat_price, sr.all_seat_row, sr.all_seat_no 
    from G04_MSRnB_seatPerRoom sr, G14_Branch b,G04_MSRnB_room r, G04_MSRnB_theaterInfo ti, G04_MSRnB_roomtype rt, G04_MSRnB_seattype st
    where r.branch_id = b.BranchID and r.theaterinfo_id = ti.id and ti.roomtype_id = rt.id and ti.seattype_id = st.id and sr.room_id = r.id
    order by sr.id;";


    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $service->SRdata = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $service->render("layouts/group4/addshowtime/showAmountseat.php");
});