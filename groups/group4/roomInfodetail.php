<?php
$klein->respond('GET', '/showRoominfo', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query1 = "select rt.roomtype, rt.roomInfo, st.seattype, st.seat_price, st.seatInfo 
    from G04_MSRnB_roomtype rt, G04_MSRnB_seattype st
    where rt.seattype_id = st.id ;";


    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $service->RIdata = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $service->render("layouts/group4/addshowtime/showRoominfo.php");
});