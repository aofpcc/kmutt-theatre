<?php
$klein->respond('GET', '/kmutt_home/branch', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;
    $conn = $database->getConnection();

    //$d = $app->login->requireLogin('customer');

    $query = $conn->query("SELECT BranchName FROM G14_Branch")->fetchAll(PDO::FETCH_BOTH);

    // $result = array();
    //
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     array_push($result, array($branch));
    //   }
    // }

    //var_dump($arr);
    // echo json_encode($result);

    $service->query = $query;
    $service->render('layouts/group1/select_branch.php');
    $conn = null;
});
