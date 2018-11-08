<?php
$klein->respond('GET', '/customer/home', function ($request, $response, $service) {
  $service->render('layouts/group1/home.php');
});

$klein->respond('GET', '/customer/booking', function ($request, $response, $service) {
  $service->render('layouts/group1/bookingPagee.php');
});

$klein->respond('GET', '/', function ($request, $response, $service) {
  $response->redirect("/customer/home");
  $response->sendHeaders();
});
