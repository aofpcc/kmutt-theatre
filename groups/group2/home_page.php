<?php
$klein->respond('GET', '/group2/home_page', function ($request, $response, $service) {
    $service->title = "KMUTT THEATRE | MEMBER CHECKING";
    $service->bootstrap3 = false;
    // global $database;
    // $conn = $database->getConnection();

    // $query = "SELECT MemberID from G05_Member_profile where ID_Card = '$card_no'" ;
    // $stmt = $conn->prepare($query);
    // $stmt->execute();

    // $num = $stmt->rowCount();
    // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
    //
    // $service->allMovies = $arr;
    // $service->pageTitle = 'KMUTT THEATRE | Member';
    $service->render('layouts/group2/home.php');
});

$klein->respond('POST', '/group2/check_card_no', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $card_no = $request->card_no;
    // $user = $_GET['user'];
    // $password = $_GET['pass'];
    // $query = "SELECT MemberID from G05_Member_profile where Email = '$user' and PhoneNumber = '$password' ";

    $query = "SELECT ID_Card from G05_Member_profile where ID_Card = '$card_no'";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // $num = $stmt->rowCount();
    // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
    //
    // $service->allMovies = $arr;

    $resultCount = $stmt->rowCount();
    if ($resultCount == 1) {
        // echo("founf]d it");
        $response->redirect('/emp/group2/home_page/select_movie');
        $response->send();
    } else {
        echo ("Not Found This Card No. !!");
        // $response->send();
    }
    // $service->pageTitle = 'KMUTT THEATRE | Member';

    // $service->render('layouts/group2/member.php');
});