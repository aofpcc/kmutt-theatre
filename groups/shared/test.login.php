<?php
$klein->respond('GET', '/register', function($request, $response, $service, $app, $validator){
  $service->render('layouts/shared/test_login.php');
});
