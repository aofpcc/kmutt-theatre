<?php
$klein->respond(['GET', 'POST'], "/test", function ($request, $response, $service, $app, $validator) {
    $response->redirect("/test/home");
    $response->sendHeaders();
});

$klein->with("/test", function () use ($klein) {

    $klein->respond(['GET', 'POST'], "/", function ($request, $response, $service, $app, $validator) {
        $response->redirect("/test/home");
        $response->sendHeaders();
    });

    $klein->respond('POST', '/login/action', function ($request, $response, $service, $app, $validator) {
        $app->login->perform($request->username, $request->password, "/test");
    });

    $klein->respond('GET', '/login', function ($request, $response, $service, $app, $validator) {
        $service->title = "Login Customer";
        $service->bootstrap3 = false;
        $service->render('layouts/shared/test_login.php');
    });

    $klein->respond(['GET', 'POST'], '/logout', function ($request, $response, $service, $app, $validator) {
        $app->login->logout();
    });

    $klein->respond('GET', '/register', function ($request, $response, $service, $app, $validator) {
        $newOne = $service->passValue;
        $newOne["title"] = "Register";
        $service->passValue = $newOne;
        $service->render('layouts/shared/test_register.php');
    });

    /**
    * Register perform at this function
    **/
    $klein->respond('POST', '/register', function ($request, $response, $service, $app, $validator) {

        if ($request->password != $request->confirmpassword) {
            $response->redirect('/register');
            $response->sendHeaders();
            die;
        }
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $validateLink = "/test/verify"; // neeed to have / before  and no / at the end
        $role = 'customer';
        $result = $app->login->register($username, $password, $email, $validateLink, $role);

        if ($result['created']) {
            $service->content = "The account have been created.";
        } else {
            $service->content = "The account cannot be created. Some error occurs!";
        }
        $service->render("layouts/core/home.php");
    });

    $klein->respond('GET', '/verify/[:hash]/[:userID]', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->validateToken($request->hash, $request->userID);
        // var_dump($result);
        // die;
        if ($result["validated"]) {
          $service->flash("validated");
            $response->redirect("/customer/login");
        } else {
          if($result["already"]){
            $service->flash("Already validated, Cannot use again");
            $response->redirect("/customer/login");
          }else{
            $service->flash("Invalid Token");
            $response->redirect("/");
          }
        }
    });

    $klein->respond('GET', '/empGod/abc', function ($request, $response, $service, $app, $validator) {
        $detail = $app->login->requireLogin('customer');
        // var_dump($detail);
        echo $detail['userID'];
    });

    $klein->respond('GET', '/mail', function ($request, $response, $service, $app, $validator) {
        var_dump($_SESSION);
    });

    $klein->respond('GET', '/emp', function ($request, $response, $service, $app, $validator) {
        $data = $app->login->requireLogin('employee');
        $userID = $data["userID"];
        $newOne = $service->passValue;
        $service->content = $userID;
        $service->passValue = $newOne;
        $service->render('layouts/core/home.php');
    });

    $klein->respond(['GET', 'POST'], '/home', function ($request, $response, $service, $app, $validator) {
        $service->title = "Home";
        $service->content= "This is home 1";
        $service->bootstrap3 = false;
        // $response->dump($service->passValue);
        // $response->sendBody();
        // die;
        $service->render('layouts/core/home.php');
    });

    $klein->respond(['GET', 'POST'], '/home2', function ($request, $response, $service, $app, $validator) {
        $service->title = "Home2";
        $service->content = "This is home 2";
        $service->render('layouts/core/home.php');
    });

    $klein->respond('GET', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $service->title = "Forget Password Page";
        $service->render('layouts/core/forgetPassword.php');
    });

    $klein->respond('POST', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->forgetPassword($request->email);
        $service->title = "Forget Password Page";
        $service->content = "Check your email to change your password";
        $service->render('layouts/core/home.php');
    });

    $klein->respond('GET', '/forgetPassword/reset/[:base]', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->resetPassword($request->base);
        $service->render('layouts/core/resetPassword.php');
    });

    $klein->respond('POST', '/resetPassword', function ($request, $response, $service, $app, $validator) {
      // die("Hoi");
        $service->validateParam('newpassword', 'New Password cannot be null')->notNull();
        $service->validateParam('confirmpassword', 'Confirm Password cannot be null')->notNull();
        if ($request->newpassword != $request->confirmpassword) {
            $service->flash('Password not the same');
            $service->back();
        }
        $result = $app->login->setNewPassword($request->newpassword);
        // $p = $service->passValue;
        if ($result["update"]) {
            $service->flash("Password was reseted");
        } else {
            $service->flash("Password was not reseted. Please Contact Us");
        }
         // $service->passValue = $p;
        $response->redirect("/customer/login");
        $response->sendHeaders();
    });

    $klein->respond('GET', '/change/Password', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->requireLogin('customer');
        $newOne = $service->passValue;
        $service->passValue["userID"] = $result["userID"];
        $service->passValue = $newOne;
        $service->render('layouts/core/changePassword.php');
    });

    $klein->respond('GET', '/bank', function($request, $response, $service, $app, $validator) {
      $service->render('layouts/core/bank.php');
    });
});
