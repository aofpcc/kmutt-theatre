<?php
$klein->respond('POST', '/login/action', function ($request, $response, $service, $app, $validator) {
  $app->login->perform($request->username, $request->password);
});

$klein->respond('GET', '/login', function($request, $response, $service, $app, $validator){
  $err = $service->flashes();
  if($err && $err["info"]) $service->errs = $err["info"];
  $service->render('layouts/shared/home.php');
});

$klein->respond(['GET', 'POST'], '/logout', function($request, $response, $service, $app, $validator){
  $app->login->logout();
});

$klein->respond('POST', '/register', function($request, $response, $service, $app, $validator){
  if($request->password != $request->confirmpassword) {
    $response->redirect('/register');
    $response->sendHeaders();
    die;
  }
  $username = $request->username;
  $password = $request->password;
  $email = $request->email;
  $result = $app->login->register($username, $password,$email);
  if($result['created']) {
    echo "Success";
  }else{
    echo "Failed\n";
    echo $result["data"];
  }
});

$klein->respond('GET', '/verify/[:hash]', function($request, $response, $service, $app, $validator){
  $result = $app->login->validateToken($request->hash);
  if($result["validated"]) {
    $app->js->alert("Validated");
  }else{
    $app->js->alert("Invalid Token");
  }
});
