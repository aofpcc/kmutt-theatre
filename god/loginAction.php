<?php
$klein->respond('POST', '/login/action', function ($request, $response, $service, $app, $validator) {
  $app->login->perform($request->username, $request->password);
});

$klein->respond('GET', '/login', function($request, $response, $service, $app, $validator){
  $err = $service->flashes();
  if($err && $err["info"]) $service->errs = $err["info"];
  $service->render('layouts/shared/home.php');
});

$klein->respond('GET', '/logout', function($request, $response, $service, $app, $validator){
  $app->login->logout();
});
