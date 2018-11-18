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
    $app->db = $database;
    $app->login = $loginperformer;
    $app->js = new JavaScriptPart;
    $app->passValue = [
      "title" => "Page",
      "username" => "Guest",
      "login_menu" => [
        "Login",
        "Register"
      ]
    ];
});

$klein->onHttpError(function ($code, $router) {
    $router->service()->layout('layouts/core/default.php');
    switch ($code) {
        case 404:
          $arr = $router->app()->passValue;
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

$folders = array(
  'group1','group2','group3','group4','group5',
  'group6','group7','group8','group9','group10',
  'group11','group12','group13','group14'
);

foreach ($folders as $folder) {
    include_once __DIR__ . "/../groups/$folder/included_files.php";
    foreach ($included as $key => $value) {
        include_once __DIR__ . "/../groups/$folder/$value.php";
    }
}

$klein->dispatch();
