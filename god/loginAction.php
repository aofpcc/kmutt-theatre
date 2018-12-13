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
        $service->render('layouts/shared/test_login.php', $app->passValue);
    });

    $klein->respond(['GET', 'POST'], '/logout', function ($request, $response, $service, $app, $validator) {
        $app->login->logout();
    });

    $klein->respond('GET', '/register', function ($request, $response, $service, $app, $validator) {
        $service->render('layouts/shared/test_register.php', $app->passValue);
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

        $pass = $app->passValue;
        if ($result['created']) {
            $pass["content"] = "The account have been created.";
        } else {
            $pass["content"] = "The account cannot be created. Some error occurs!";
        }
        $service->render("layouts/core/home.php", $pass);
    });

    $klein->respond('GET', '/verify/[:hash]/[:userID]', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->validateToken($request->hash, $request->userID);
        // var_dump($result);
        // die;
        if ($result["validated"]) {
          $service->flash("validated");
            $response->redirect("/test/login");
        } else {
          if($result["already"]){
            $service->flash("Already validated, Cannot use again");
            $response->redirect("/test/login");
          }else{
            $service->flash("Invalid Token");
            $response->redirect("/test");
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
        $arr = $app->passValue;
        $data = $app->login->requireLogin('employee');
        $userID = $data["userID"];
        $arr["content"] = $userID;
        $service->render('layouts/core/home.php', $arr);
    });

    $klein->respond(['GET', 'POST'], '/home', function ($request, $response, $service, $app, $validator) {
        $arr = $service->passValue;
        $arr["title"] = "Home";
        $arr["content"] = "This is home 1";
        $service->passValue = $arr;
        $service->bootstrap3 = false;
        // $response->dump($service->passValue);
        // $response->sendBody();
        // die;
        $service->render('layouts/core/home.php');
    });

    $klein->respond(['GET', 'POST'], '/home2', function ($request, $response, $service, $app, $validator) {
        $arr = $app->passValue;
        $arr["title"] = "Home2";
        $arr["content"] = "This is home 2";
        $service->render('layouts/core/home.php', $arr);
    });

    $klein->respond('GET', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $pass = $app->passValue;
        $pass["title"] = "Forget Password Page";
        $service->render('layouts/core/forgetPassword.php', $pass);
    });

    $klein->respond('POST', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $pass = $app->passValue;
        $result = $app->login->forgetPassword($request->email);
        $pass["title"] = "Forget Password Page";
        $pass["content"] = "Check your email to change your password";
        $service->render('layouts/core/home.php', $pass);
    });

    $klein->respond('GET', '/forgetPassword/reset/[:base]', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->resetPassword($request->base);
        $pass = $app->passValue;
        $service->render('layouts/core/resetPassword.php', $pass);
    });

    $klein->respond('POST', '/resetPassword', function ($request, $response, $service, $app, $validator) {
        $service->validateParam('newpassword', 'New Password cannot be null')->notNull();
        $service->validateParam('confirmpassword', 'Confirm Password cannot be null')->notNull();
        if ($request->newpassword != $request->confirmpassword) {
            $service->flash('Shit Not the same');
            $service->back();
        }
        $pass = $app->passValue;
        $result = $app->login->setNewPassword($request->newpassword);
        if ($result["update"]) {
            $pass["content"] = "Password was reseted";
        } else {
            $pass["content"] = "Password was not reseted. Please Contact Us";
        }
        $response->redirect("/test/logout");
    });

    $klein->respond('GET', '/changePassword', function ($request, $response, $service, $app, $validator) {
        $pass = $app->passValue;
        $result = $app->login->requireLogin('customer');

        $pass["userID"] = $result["userID"];
        $service->render('layouts/core/changePassword.php', $pass);
    });

    $klein->respond('POST', '/changePassword', function ($request, $response, $service, $app, $validator) {
        $pass = $app->passValue;
        $result = $app->login->requireLogin('customer');
        if ($request->newpassword != $request->confirmpassword) {
            $service->flash("New password is not same as confirm password");
            $service->back();
        }
        $result = $app->login->changePassword($request->oldpassword, $request->newpassword);
        if (!$result["change"]) {
            $service->flash("The old password incorrect");
            $service->back();
        }
        $pass["content"] = "The password was changed";
        $service->render('layouts/core/home.php', $pass);
    });
});
