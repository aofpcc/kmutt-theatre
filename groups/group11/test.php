<?php
$klein->respond("/staff/finance/test", function($request, $response, $service, $app, $validator) {
  $startDate = $request->startDate;
  $conn = $app->db->getConnection();



  $result = [
    "tables" => [
      ["1001", 	"Lorem",	"ipsum",	"dolor",	"sit"],
      ["1002", 	"Lorem2",	"ipsum3",	"dolor2",	"sit1"]
    ]
  ];

  return $response->json($result);
});
