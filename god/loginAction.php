<?php
$klein->respond('POST', '/login/action', function ($request, $response, $service, $app, $validator) {
  $app->login->perform($request->username, $request->password);
});

$klein->respond('GET', '/login', function($request, $response, $service, $app, $validator){
  $service->render('layouts/shared/home.php');
});
