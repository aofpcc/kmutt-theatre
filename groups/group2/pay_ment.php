<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond('POST', '/group2/home_page/select_movie/select_time/select_seat/pay_ment', function ($request, $response, $service) use ($database) {
    $service->bootstrap3 = false;

    $conn = $database->getConnection();

    $movietitle = $conn->query("SELECT title FROM G09_Movie ")->fetchAll(PDO::FETCH_BOTH);
    $service->movietitle=$movietitle[1];

    
    $service->selectedSeats = $request->selectedSeats;
    
    $selectedSeats = $request->selectedSeats;
    if(isset($_POST['book_seat'])){
      if($request->selectedSeats){
        try{

    $seats = array();
    for ($j=0; $j < count($selectedSeats) ; $j++) {
      $seatInfo = explode('_', $selectedSeats[$j]);
      $s = [
        'row' => $seatInfo[0],
        'seat' => $seatInfo[1],
      ];
  
      array_push($seats, $s);
    }

        // $response->dump($room_no);
        // $response->sendBody();
        // die;
        // $theatre_no = $room_no[0]["room_id"];
        // $movie_id = $id_movie[0]["movie_id"];
      }
      catch(PDOException $e){

        echo $sql."<br>", $e->getMessage();

      }
    }
  }
  
  $service->selectedSeats = $request->selectedSeats;
  $service->seats = $seats;
$service->render('layouts/group2/payment.php');
});
?>