<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$klein->respond('GET', '/group2/home_page/select_movie/select_time/select_seat/pay_ment', function ($request, $response, $service) {
    
$service->render('layouts/group2/payment.php');
});

$klein->respond('POST', '/group2/check_card_no', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $card_no = $request->card_no;

    $query1 = "SELECT ID_Card from G05_Member_profile where ID_Card = '$card_no'";
    $stmt1 = $conn->prepare($query1);
    $stmt1->execute();

    $return_no = $request->return_no;

    // $query2 = "SELECT movie_id from G02_Ticket_history where movie_id = '$return_no'";
    // $stmt2 = $conn->prepare($query2);
    // $stmt2->execute();

    $resultCount1 = $stmt1->rowCount();
    // $resultCount2 = $stmt2->rowCount();

    if ($resultCount1 == 1) {
        // echo("founf]d it");
        $response->redirect('/emp/group2/home_page/select_movie/select_time/select_seat/pay_ment/done');
        $response->send();
    } else {
        echo("Invalid Information !!");
        // $response->redirect('/group2/home_page/select_movie/select_time/select_seat/done');
        // $response->send();
    }
    // $service->pageTitle = 'KMUTT THEATRE | Member';

    // $service->render('layouts/group2/returnticket.php');
});

$klein->respond('POST', '/group2/gopayment', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $response->redirect('/emp/group2/home_page/select_movie/select_time/select_seat/pay_ment');
    $response->send();
});
