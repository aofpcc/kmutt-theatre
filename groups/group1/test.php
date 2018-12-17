<?php
$klein->respond('/group1/test', function($request, $response, $service, $app, $validator){
  $service->data = [
    1, 2, 3, 4,
    "xxx" => [
      "a", "b", "c"
    ]
  ];
  $service->render('layouts/group1/test2.php');
});
