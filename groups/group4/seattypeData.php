<?php
$klein->respond('GET', '/showSeattype', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query1 = "select * from G04_MSRnB_seattype";


    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $service->Sdata = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $service->render("layouts/group4/addshowtime/showSeattype.php");
});