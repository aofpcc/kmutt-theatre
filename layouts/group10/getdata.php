<?php 
  global $database;
  $conn = $database->getConnection();

  $id = $_POST['id'];

  $stmt = $conn->prepare("SELECT * FROM advertisement WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  // echo $data;
  echo json_encode($data);

?>