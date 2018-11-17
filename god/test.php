<?php
$klein->respond('GET', '/empGod/abc', function($request, $response, $service, $app, $validator) {
  $app->login->requireLogin('customer');
  echo "Good";
});
