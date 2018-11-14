  <?php

  $klein->respond('POST', '/customer/ticket', function ($request, $response, $service)  use($database){
  $conn = $database->getConnection();

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Check submitted params
  //  $request->validate('selectedSeats')->notNull();
  //

  //  // Pass on the params to the page we're gonna render
   $service->selectedSeats = $request->selectedSeats;

  //new code
  if ($request->selectedSeats) {
    try {
       $selectedSeats = $request->selectedSeats;
       $movie_id = '5';
       $theatre_no = '2';
       $branch = '3';
       $showtime = TIME("00:00:00");
       $dates = '0000-00-00';
       $movie_name = '4';
       $price = '200';
       //Pon Message -> add buyer_id
       $buyer_id = 1;
       // echo json_encode($selectedSeats);

       // ADD ticket for each seat
       for ($i = 0; $i < count($selectedSeats); $i++) {
         //Pon Message -> update query Message
         $sql = "INSERT INTO ticket (branch, movie_name, movie_id, dates, showtime, theatre_no, seat_no, price, CusID,order_time)
         VALUES ('$branch', '$movie_name', '$movie_id', '$dates', '$showtime', '$theatre_no', '$selectedSeats[$i]', '$price','$buyer_id',CURRENT_TIMESTAMP)";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
         // echo $sql.'<br>';
         //Pon Message ->  query Message for Financial Table         
         $sql = "INSERT INTO Financial (FinID, RefID, amount, date, customerID)
         VALUES (2,(SELECT MAX(id) FROM ticket),'$price',CURRENT_TIMESTAMP,'$buyer_id')";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
       }

    } catch(PDOException $e){
      echo $sql."<br>", $e->getMessage();
    }

  }
  // Render the page

//รอใส่หน้าของเกม
  $service->render('layouts/group2/payment.php');

   //error
  // $value = array(selectedSeats);
   //echo $value;
  //  $id = 5;
  //  $sql = "INSERT INTO ticket(seat_no, id) VALUES($value, $id)";
  //  $stmt = $conn->prepare($query);
  //  $stmt->bind_param('selectedSeats', $_POST['seat_no']);
  //  $stmt->execute();

  });
   ?>
