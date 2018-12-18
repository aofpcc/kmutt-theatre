<?php
$klein->respond('GET', '/group7', function ($request, $response, $service, $app, $validator) {
  $conn = $app->db->getConnection();
  $service->render('layouts/group7/home.php');
});

$klein->respond('GET', '/invitations/[:id]', function ($request, $response, $service, $app, $validator) {
  $service->title = "Invitation Page";
  $service->bootstrap3 = false;
  $service->id = $request->id;
  $service->render("layouts/group7/invitations.php");
});