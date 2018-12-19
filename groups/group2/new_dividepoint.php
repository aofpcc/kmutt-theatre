<?php
$klein->respond('GET', '/ticket/[:branch_id]', function($request, $response, $service, $app, $validator){
    global $database;
    $conn = $database->getConnection();



});
