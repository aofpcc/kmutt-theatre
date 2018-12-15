<?php
$klein->respond("/staff/finance/test", function($request, $response, $service, $app, $validator) {
  $startDate = $request->startDate;
  $endDate = $request->endDate;
  $conn = $app->db->getConnection();



  $result = "Start Date : ".$startDate." End Date : ".$endDate;


  return $response->json($result);
});
