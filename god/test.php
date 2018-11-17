<?php
$klein->respond('GET', '/empGod/abc', function($request, $response, $service, $app, $validator) {
  $detail = $app->login->requireLogin('customer');
  // var_dump($detail);
  echo $detail['userID'];
});
