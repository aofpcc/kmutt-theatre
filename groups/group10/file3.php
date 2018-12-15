<?php
$klein->respond('POST', '/group10/getdata', function ($request, $response, $service) {
  // Render the page
  $service->noHeader = true;

  // echo 5;
  // $service->render('layouts/group10/getdata.php');
  global $database;
  $conn = $database->getConnection();

  $id = $_POST['id'];

  // $stmt = $conn->prepare("SELECT * FROM advertisement WHERE id = :id");
  $stmt = $conn->prepare("SELECT i.id, name, url, banner, start_date, end_date, status
                          FROM G10_Advertisement_info AS i, G10_Advertisement_link AS l,
                           G10_Advertisement_banner AS b, G10_Advertisement_time AS t
                          WHERE i.id = l.id AND l.id = b.id AND b.id = t.id AND i.id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  // echo 5;
  echo json_encode($data);
});
