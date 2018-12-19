<?php
$klein->respond('POST', '/kmutt/ticket/[:showtime_id]', function ($request, $response, $service, $app, $validator) use($database) {
  // var_dump($request);
  // die;
  $userID = "".$app->login->requireLogin('customer')["userID"];
  $service->bootstrap3 = false;
  $conn = $database->getConnection();

  $query_showtime = $conn->query("select movie_id, room_id, date(startTime) as startDate,
  time(startTime) as startTime from G04_MSRnB_showingroom where id = '$request->showtime_id';")->
  fetchAll(PDO::FETCH_ASSOC);
  $id_movie = $query_showtime[0]["movie_id"];

  $query_movie = $conn->query("select title, Image,length from G09_Movie where id = '".$id_movie."';")
  ->fetchAll(PDO::FETCH_ASSOC);

  $times = date('g:ia', strtotime($query_showtime[0]["startTime"]));
  //$time = date_format($query_showtime[0]["startTime"], 'G:ia');
  $temp = new DateTime($query_showtime[0]["startDate"]);
  $month = $temp->format("F");
  $dates = $temp->format("d")." ".$month." ".$temp->format("Y");
  $title = $query_movie[0]["title"];
  $image = $query_movie[0]["Image"];
  $length = $query_movie[0]["length"];
  $theatre_no = $query_showtime[0]["room_id"];
  // $dates = $date;
  // $times = $time;

  $service->title = $title;
  $service->image = $image;
  $service->length = $length;
  $service->theatre_no = $theatre_no;
  $service->date = $dates;
  $service->time = $times;

  $showtime_id = $request->showtime_id;
  $service->showtime_id = $showtime_id;
  try {
      $conn->beginTransaction();
      $already = [];
      foreach($request->seat as $s) {
          $query = "SELECT * from G02_Ticket_history WHERE showtime_id = :showtime_id and seat_ticket = :seat_ticket and return_ticket=0";
          $stmt = $conn->prepare($query);
          $seat_ticket = $s;
          $stmt->bindParam(":showtime_id", $showtime_id);
          $stmt->bindParam(":seat_ticket", $seat_ticket);
          $stmt->execute();
          $num = $stmt->rowCount();
          if($num > 0) {
              array_push($already, $s);
          }
      }
      if(count($already) > 0) {
          throw new Exception("Some seats have book already");
      }

      $code = uniqid();
      foreach($request->seat as $s) {
          $query = "Insert into G02_Ticket_history SET showtime_id = :showtime_id, seat_ticket = :seat_ticket, return_ticket=0,
          cost=:cost, code=:code, how_booking='Web', paid=1, date_book=now(), change_ticket=0";
          $stmt = $conn->prepare($query);
          $cost = 20;
          $seat_ticket = $s;
          // var_dump($s);
          $stmt->bindParam(":showtime_id", $showtime_id);
          $stmt->bindParam(":seat_ticket", $seat_ticket);
          $stmt->bindParam(":cost", $cost);
          $stmt->bindParam(":code", $code);
          $stmt->execute();

          $lastInsertId = $conn->lastInsertId();

          $query = "Insert into G02_Ticket_member SET userID=:userID, ticket_id=:ticket_id";
          $stmt = $conn->prepare($query);
          $stmt->bindParam(":userID", $userID);
          $stmt->bindParam(":ticket_id", $lastInsertId);
          $stmt->execute();
      }
      // throw new Exception("E");
      $conn->commit();
  }catch(Exception $e) {
      $conn->rollback();
      $service->flash("Sorry for unconvenient, Unable to book ticket right now");
      $service->back();
      return;
  }
  // $service->seats = $seats;
  // $service->movie_name = $movie_name;
  // $service->showtime = $showtime;
  // $service->theatre_no = $theatre_no;
  $total = [];
  foreach($request->seat as $s) {
    $str = explode("_", $s);
    array_push($total, [
      "row" => $str[0],
      "seat" => $str[1]
    ]);
  }
  $service->total = $total;
  $service->code = $code;
  $service->render('layouts/group1/ticket.php');
});
