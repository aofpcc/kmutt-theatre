<?php
  global $database;
  $conn = $database->getConnection();

  $id = $_POST['id'];

  $stmt = $conn->prepare("SELECT transactionId, dName, date, e.FirstName, e.LastName,
    m.FirstName, m.LastName, amount FROM Financial, FinancialID, Membership as m,
    employee as e WHERE Financial.FinID = FinancialID.ID
    AND  Financial.empID = e. EmpID AND Financial.customerID = m.ID");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  // echo $data;
  echo json_encode($data);

?>
