<?php
$klein->with("/test", function() use($klein) {
  $klein->service()->layout('layouts/core/default.php');

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

  $klein->respond('GET', '/register', function($request, $response, $service, $app, $validator){
    $service->render('layouts/shared/test_register.php');
  });

  /**
  * Register perform at this function
  **/
  $klein->respond('POST', '/register', function($request, $response, $service, $app, $validator){
    if($request->password != $request->confirmpassword) {
      $response->redirect('/register');
      $response->sendHeaders();
      die;
    }
    $username = $request->username;
    $password = $request->password;
    $email = $request->email;
    $validateLink = "/test/verify"; // neeed to have / before  and no / at the end
    $result = $app->login->register($username, $password,$email, $validateLink);
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

  $klein->respond('GET', '/empGod/abc', function($request, $response, $service, $app, $validator) {
    $detail = $app->login->requireLogin('customer');
    // var_dump($detail);
    echo $detail['userID'];
  });

  $klein->respond('GET', '/mail', function ($request, $response, $service, $app, $validator) {
    var_dump($_SERVER['HTTP_HOST']);
  });

  $klein->respond(['GET', 'POST'], '/home', function($request, $response, $service, $app, $validator) {
    $arr = $app->passValue;
    $arr["title"] = "Home";
    $arr["content"] = "This is home 1";
    $service->render('layouts/core/home.php', $arr);
  });

  $klein->respond(['GET', 'POST'], '/home2', function($request, $response, $service, $app, $validator) {
    $arr = $app->passValue;
    $arr["title"] = "Home2";
    $arr["content"] = "This is home 2";
    $service->render('layouts/core/home.php', $arr);
  });

});
