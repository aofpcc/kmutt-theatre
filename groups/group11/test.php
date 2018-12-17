<?php
$klein->respond("/staff/finance/test", function($request, $response, $service, $app, $validator) {
  $startDate = $request->startDate;
  $endDate = $request->endDate;
  $conn = $app->db->getConnection();



  $revenue = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Revenue WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59' ")->fetch();
  $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59'")->fetch();
  $revenueLine = $conn->query("select year, month, sum(amount) \"total\" 
                                from (select * 
                                      from G03_FIN_Revenue a 
                                      join 
                                      (select transactionID \"tran\", month(addDate) \"month\", year(addDate) \"year\"
                                      from G03_FIN_Revenue) b on a.transactionID = b.tran) a
                                      WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59'
                                  group by month, year
                                  order by year, month asc;")->fetchAll();
  $expensesLine = $conn->query("select year, month, sum(amount) \"total\" 
                                from (select *
                                from G03_FIN_Expenses a 
                                join 
                                (select transactionID \"tran\", month(addDate) \"month\", year(addDate) \"year\"
                                from G03_FIN_Expenses) b on a.transactionID = b.tran) a
                                WHERE  addDate >= '".$startDate." 00:00:00' AND addDate <= '".$endDate." 23:59:59'
                                group by month, year
                                order by year, month asc;")->fetchAll();


  $result = [
    "revenue" => $revenue,
    "expenses" => $expenses,
    "revenueLine" => $revenueLine,
    "expensesLine" => $expensesLine
  ];
  return $response->json($result);
});
