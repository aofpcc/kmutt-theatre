<?php
$klein->respond('GET', '/group10/logs', function ($request, $response, $service, $app, $validator) {
  // $service->bootstrap3 = true;
  if(empty($_SESSION['login'])) {
    $userId = $app->login->requireLogin('employee');
  }
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query("SELECT id, username, date, action 
                        FROM G10_Advertisement_log, core_user_table 
                        WHERE edit_by = userID;")->fetchAll(PDO::FETCH_BOTH);
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  $service->list = $list;
  $service->isLogsPage = true;
  $service->render('layouts/group10/home.php');
  $conn = null;
});
