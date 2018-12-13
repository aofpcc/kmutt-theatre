<?php
$klein->respond('GET', '/kmutt_home/branch/show_time', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    $query = $conn->query("SELECT DISTINCT endTime FROM G04_MSRnB_showingroom WHERE movie_id = 3")->fetchAll(PDO::FETCH_BOTH);

    $service->query = $query;
    $service->render('layouts/group1/select_time.php');
    $conn = null;

});
