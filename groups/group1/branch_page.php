<?php
$klein->respond('GET', '/kmutt_home/branch', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    //$d = $app->login->requireLogin('customer');

    $query = $conn->query("SELECT BranchName FROM G14_Branch")->fetchAll(PDO::FETCH_BOTH);

    $service->query = $query;
    $service->render('layouts/group1/select_branch.php');
    $conn = null;
});
