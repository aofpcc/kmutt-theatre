<?php
$klein->respond('GET', '/group3', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query("SELECT transactionId, dName, date, e.FirstName, e.LastName, m.FirstName, m.LastName, amount FROM Financial, FinancialID, Membership as m, employee as e WHERE Financial.FinID = FinancialID.ID AND  Financial.empID = e. EmpID AND Financial.customerID = m.ID")->fetchAll(PDO::FETCH_BOTH);
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allMovies = $arr;
  $service->pageTitle = 'Financial';
  $service->list = $list;
  $service->render('layouts/group3/home.php');
  $conn = null;
});
