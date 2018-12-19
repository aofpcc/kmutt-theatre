<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('GET', '/ticket/changeticket', function ($request, $response, $service) {
    // global $database;
    // $conn = $database->getConnection();

    // $service->pageTitle = 'KMUTT THEATRE | Return Ticket';

    $service->render('layouts/group2/changeticket.php');
});

$klein->respond('GET', 'ticket/changeticket/subchangeticket', function ($request, $response, $service) {
    
    $service->render('layouts/group2/subchangeticket.php');
    });

$klein->respond('POST', '/ticket/check_change_ticket', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $card_no = $request->card_no;

    $query1 = "SELECT MemberID from G05_Member_profile where MemberID = '$card_no'";
    $stmt1 = $conn->prepare($query1);
    $stmt1->execute();

    $change_no = $request->change_no;

    $query2 = "SELECT id from G02_Ticket_history where id = '$change_no'";
    $stmt2 = $conn->prepare($query2);
    $stmt2->execute();


    $resultCount1 = $stmt1->rowCount();
    $resultCount2 = $stmt2->rowCount();

    if ($resultCount1 == 1 && $resultCount1 == 1) {
        // echo("founf]d it");
        $response->redirect('/emp/ticket/changeticket/subchangeticket');
        $response->send();
    } else {
        echo ("Not Found This Card No. !!");
        // $response->redirect('/group2/select_movie/select_time/select_seat/done');
        // $response->send();
    }

    // $service->pageTitle = 'KMUTT THEATRE | Member';

    // $service->render('layouts/group2/changeticket.php');
});
