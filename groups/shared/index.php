<?php
$klein->respond('GET', '/', function ($request, $response, $service) {
  $response->redirect("/test");
});
