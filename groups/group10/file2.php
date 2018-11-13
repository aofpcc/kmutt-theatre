<?php
$klein->respond('POST', '/group10/upload', function ($request, $response, $service) {
  // Render the page
  $service->render('layouts/group10/upload.php');
});
