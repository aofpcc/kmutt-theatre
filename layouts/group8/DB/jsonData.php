<?php 
  global $database;
  $conn = $database->getConnection();

  $id = $_POST['id'];
  $stmt = $conn->prepare("select * from G08_Promo_main  
                          where now() between StartDate and EndDate;");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  echo json_encode($data);

?>