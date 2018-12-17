<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/login.php';
require_once __DIR__ . '/../config/js.php';

$klein = new \Klein\Klein();
$database = new \Database();
$loginperformer = new \LoginPerformer($database, $klein);

session_start();

$klein->respond(function ($request, $response, $service, $app, $validator) use ($database, $loginperformer) {
    $service->layout('layouts/core/default.php');
    $service->pageRole = "THEATRE";
    $service->bootstrap3 = true;
    $service->bootstrap = true;
    $app->db = $database;
    $app->login = $loginperformer;
    $app->js = new JavaScriptPart;

    $username = (empty($_SESSION['username']) ? "Guest" : $_SESSION['username']);

    if ($username == 'Guest') {
        $login_menu = [
        ["name" => "Log in", "href" => "/test/login"],
        ["name" => "Register", "href" => "/test/register"],
        ["name" => "Forget Password", "href" => "/test/forgetPassword"]
      ];
    } else {
        $login_menu = [
        // ["name" => "View Profile", "href" => ""],
        ["name" => "Account", "href" => "/customer/membership"],
        ["name" => "Change Password", "href" => "/test/changePassword"],
        ["name" => "Log out", "href" => "/test/logout"],
      ];
    }

    $service->passValue = [
      "title" => "Page",
      "username" => $username,
      "login_menu" => $login_menu
    ];
});

$klein->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
          $arr = $router->service()->passValue;
          $arr["title"] = "Page Not Found";
          $router->service()->render('layouts/core/notfound.php', $arr);
          die;
          break;
        case 405:
            $router->response()->body(
                'You can\'t do that!'
            );
            break;
        default:
            $router->response()->body(
                'Oh no, a bad error happened that caused a '. $code
            );
    }
});

include_once __DIR__ . "/../groups/shared/index.php";

include_once __DIR__ . "/../god/included_files.php";
foreach ($included as $key => $value) {
    include_once __DIR__ . "/../god/$value.php";
}

// $folders = array(
//   'group1','group2','group3','group4','group5',
//   'group6','group7','group8','group9','group10',
//   'group11','group12','group13','group14'
// );

$customer = [
    'group1', 'group5', 'group6', 'group12', 'group14' 
];

$employees = array(
      'group2','group3','group4','group7','group8','group9','group10',
      'group11','group13'
);

// foreach ($folders as $folder) {
//     include_once __DIR__ . "/../groups/$folder/included_files.php";
//     foreach ($included as $key => $value) {
//         include_once __DIR__ . "/../groups/$folder/$value.php";
//     }
// }

$klein->with('/emp', function() use($klein, $employees, $database) {
    // $klein->service()->pageRole = "EMPLOYEE";
    foreach ($employees as $folder) {
            include_once __DIR__ . "/../groups/$folder/included_files.php";
            foreach ($included as $key => $value) {
                include_once __DIR__ . "/../groups/$folder/$value.php";
            }
    }
});

$klein->with('/customer', function() use($klein, $customer, $database) {
    // $klein->service()->pageRole = "THEATRE";
    // var_dump("200");
    foreach ($customer as $folder) {
            include_once __DIR__ . "/../groups/$folder/included_files.php";
            foreach ($included as $key => $value) {
                include_once __DIR__ . "/../groups/$folder/$value.php";
            }
    }
});


$klein->dispatch();
