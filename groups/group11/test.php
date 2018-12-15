<?php
$klein->respond("/staff/finance/test", function($request, $response, $service, $app, $validator) {
  $startDate = $request->startDate;
  $endDate = $request->endDate;
  $conn = $app->db->getConnection();



  $revenue = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Revenue WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59'")->fetch();
  $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59'")->fetch();

  $result = [
    "revenue" => $revenue,
    "expenses" => $expenses
  ];
  return $response->json($result);
});
