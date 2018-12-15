<?php
$klein->respond('GET', '/group3', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $list = $conn->query(
    // " SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FName as memFN, m.LName as memLN, amount 
    // FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FINID, G05_Member_profile as m, G11_Emp_staff as e 
    // WHERE Revenue.FinID = FINID.ID AND Revenue.empID = e.Emp_id AND Revenue.customerID = m.MemberID"

    // Removed employee and member from the query, since it shows no result.
    // Because there are no employee and membership info specified in the DB yet.
    // Also, limit has been set to 200 to reduce load time of the page.
    "SELECT transactionId, dName, date, amount 
    FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID
    WHERE Revenue.FinID = FinancialID.ID
    LIMIT 200"
    )->fetchAll(PDO::FETCH_BOTH);
  $service->pageTitle = 'Financial';
  $service->list = $list;


  $service->render('layouts/group3/home.php');
  $conn = null;
});
