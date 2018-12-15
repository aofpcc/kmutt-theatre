<?php
$klein->respond('GET', '/group2/home_page/changeticket', function ($request, $response, $service) {
    // global $database;
    // $conn = $database->getConnection();

    // $service->pageTitle = 'KMUTT THEATRE | Return Ticket';

    $service->render('layouts/group2/changeticket.php');
});

$klein->respond('POST', '/group2/check_change_ticket', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $card_no = $request->card_no;

    $query1 = "SELECT ID_Card from G05_Member_profile where ID_Card = '$card_no'";
    $stmt1 = $conn->prepare($query1);
    $stmt1->execute();

    $change_no = $request->change_no;

    $query2 = "SELECT movie_id from G02_Ticket_history where movie_id = '$change_no'";
    $stmt2 = $conn->prepare($query2);
    $stmt2->execute();

    // $card_no = $request->card_no;

    // $query = "SELECT MemberID from G05_Member_profile where ID_Card = '$card_no'" ;
    // $stmt = $conn->prepare($query);
    // $stmt->execute();

    // $num = $stmt->rowCount();
    // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

    $resultCount1 = $stmt1->rowCount();
    $resultCount2 = $stmt2->rowCount();

    if ($resultCount1 == 1 && $resultCount1 == 1) {
        // echo("founf]d it");
        $response->redirect('/emp/group2/home_page/select_movie');
        $response->send();
    } else {
        echo ("Not Found This Card No. !!");
        // $response->redirect('/group2/home_page/select_movie/select_time/select_seat/done');
        // $response->send();
    }

    // $service->pageTitle = 'KMUTT THEATRE | Member';

    // $service->render('layouts/group2/changeticket.php');
});
