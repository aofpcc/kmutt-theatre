<?php
$klein->respond('GET', '/getTicketFromCode', function($request, $response, $service, $app) {
    $service->render('layouts/group2/newGetTicket.php');
});
