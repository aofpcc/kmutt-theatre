<?php
$klein->respond('GET', '/group3', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $revenueList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FirstName as memFN, m.LastName as memLN, amount
                                FROM Revenue, FinancialID, Membership as m, employee as e
                                WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e. EmpID AND Revenue.customerID = m.ID")->fetchAll(PDO::FETCH_BOTH);
  $service->pageTitle = 'Financial';
  $service->revenuelist = $revenueList;

  $expensesList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FirstName as memFN, m.LastName as memLN, amount
                                FROM Expenses, FinancialID, Membership as m, employee as e
                                WHERE Expenses.FinID = FinancialID.ID AND  Expenses.empID = e. EmpID AND Expenses.customerID = m.ID")->fetchAll(PDO::FETCH_BOTH);
  $service->pageTitle = 'Financial';
  $service->expenseslist = $expensesList;

  
  $service->render('layouts/group3/home.php');
  $conn = null;
});
