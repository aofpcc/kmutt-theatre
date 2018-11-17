<?php
$klein->respond('GET', '/mail', function ($request, $response, $service, $app, $validator) {
  var_dump($_SERVER['HTTP_HOST']);
});
