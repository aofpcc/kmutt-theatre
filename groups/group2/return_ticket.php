<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('GET', '/group2/home/returnticket', function ($request, $response, $service){

    $service->pageTitle = 'KMUTT THEATRE | Return Ticket';

  $service->render('layouts/group2/returnticket.php');
});