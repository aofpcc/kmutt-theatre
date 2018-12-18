<?php
$klein->respond('/g04', function($reqeust, $response, $service, $app) {
    $service->render('layouts/group4/main.php');
});