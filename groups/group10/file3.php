<?php
$klein->respond('POST', '/group10/getdata', function ($request, $response, $service) {
  // Render the page
  $service->render('layouts/group10/getdata.php');
});
