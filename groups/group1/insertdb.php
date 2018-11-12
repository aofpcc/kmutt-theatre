<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $klein->respond('POST', '/customer/payment', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();

    // Check submitted params
  //  $request->validate('selectedSeats')->notNull();
   //

   //  // Pass on the params to the page we're gonna render
     $service->selectedSeats = $request->selectedSeats;

     //error
    // $value = array(selectedSeats);
     //echo $value;
   //  $id = 5;
   //  $sql = "INSERT INTO ticket(seat_no, id) VALUES($value, $id)";
   //  $stmt = $conn->prepare($query);
   //  $stmt->bind_param('selectedSeats', $_POST['seat_no']);
   //  $stmt->execute();

    // Render the page
    $service->render('layouts/group2/payment.php');
  });

?>
