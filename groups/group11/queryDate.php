<?php
$klein->respond("/staff/finance/queryDate", function($request, $response, $service, $app, $validator) {
  $startDate = $request->startDate;
  $endDate = $request->endDate;
  $conn = $app->db->getConnection();



  $revenue = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Revenue WHERE  addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetch();
  $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses WHERE  addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetch();

  $result = [
    "revenue" => $revenue,
    "expenses" => $expenses
  ];
  return $response->json($result);
});
