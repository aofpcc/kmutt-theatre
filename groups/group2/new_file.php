<?php
$klein->respond('GET', '/ticket/[:branch_id]', function($request, $response, $service, $app, $validator){
    $conn = $app->db->getConnection();
    $userID = $app->login->requireLogin('employee')["userID"];

    $data2 = $conn->query("SELECT * FROM G11_Current_dep_of_emp WHERE userID=$userID and branchID=$request->branch_id")->fetchAll(PDO::FETCH_ASSOC);

    // branch id doest not belong to this userID
    if(count($data2) == 0 ) {
        $service->flash("Incorrect Branch");
        // $service->back();
        $response->redirect("/emp/staff/employee/dashboard");
        $response->sendHeaders();
        return;
    }
    
    $service->bootstrap3 = false;
    
    // $app->login->requireLogin('employee');
    // echo $request->branch_id;
    $query = "select * from G09_Movie b,
    (SELECT distinct movie_id FROM available_movies WHERE branch_id=:branch_id ) a
    WHERE b.id = a.movie_id;";
    $stmt = $conn->prepare($query);
    $branch_id = $request->branch_id;
    $stmt->bindParam(":branch_id", $branch_id);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $response->dump($data);
    // $response->sendBody();
    // die;

    $service->movies = $data;
    $service->branch_id = $request->branch_id;
    $service->render('layouts/group2/new_page.php');
});

$klein->respond('GET', '/ticket/[:branch_id]/[:movie_id]', function($request, $response, $service, $app, $validator){
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();
    // $app->login->requireLogin('employee');
    // echo $request->branch_id;
    $query = "select *
    from (SELECT id as showtime_id, movie_id, room_id, startTime, endtime, branch_id, room_no, soundtrack, subtitle, theaterinfo_id from available_movies WHERE branch_id=:branch_id and movie_id=:movie_id order by startTime) a
    join G04_MSRnB_theaterInfo b on a.theaterinfo_id = b.`id`
    join G04_MSRnB_roomtype c on c.`id` = b.`roomtype_id`;";
    $stmt = $conn->prepare($query);
    $branch_id = $request->branch_id;
    $movie_id = $request->movie_id;
    $stmt->bindParam(":branch_id", $branch_id);
    $stmt->bindParam(":movie_id", $movie_id);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $response->dump($data);
    // $response->sendBody();
    // die;
    $service->showtimes = $data;
    // $service->branch_id = $request->branch_id;
    $service->partial('layouts/group2/new_sub_branch.php');
});

$klein->respond('GET', '/ticket/showtime/[:showtime_id]', function($request, $response, $service, $app, $validator){
    $conn = $app->db->getConnection();
    
    $query = "SELECT * from G04_v_showtime_seat WHERE showtime_id = $request->showtime_id";
    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    
    if(count($data) == 0) {
        echo "No available showtime";
        return;
    }

    $service->price = $data[0]["seat_price"];

    $service->seatMap = [  //Seating chart
        'aaaaaaaaaa',
        'aaaaaaaaaa',
        '__________',
        '__aaaaaa__',
        'aaaaaaaaaa',
        'aaaaaaaaaa',
        'aaaaaaaaaa',
        'aaaaaaaaaa',
        'aaaaaaaaaa',
        '__aaaaaa__'
      ];
      $soldSeat = $conn->query("select seat_ticket from G02_Ticket_history where showtime_id = $request->showtime_id")->
  fetchAll(PDO::FETCH_ASSOC);
      $result = [];
      foreach ($soldSeat as $value) {
        $str = $value["seat_ticket"];
        array_push($result, $str);
      }
     //
      $service->soldSeat = $result;
      $service->showtime_id = $request->showtime_id;
    $service->partial('layouts/group2/new_sub_select_seat.php');
});

$klein->respond('POST', '/ticket/showtime/buy/[:showtime_id]', function($request, $response, $service, $app, $validator){
    $userID = $app->login->requireLogin('employee')["userID"]."";
    $conn = $app->db->getConnection();
    // var_dump($request->selectedSeat[0]);
    // $response->dump($request->selectedSeat);
    // $response->sendBody();
    // die;
    $result = [
        "result" => false,
        "message" => ""
    ];
    $showtime_id = $request->showtime_id;
    try {
        $conn->beginTransaction();
        $already = [];
        foreach($request->selectedSeat as $s) {
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
        foreach($request->selectedSeat as $s) {
            $query = "Insert into G02_Ticket_history SET showtime_id = :showtime_id, seat_ticket = :seat_ticket, return_ticket=0,
            cost=:cost, code=:code, how_booking='Counter', paid=1, date_book=now(), change_ticket=0";
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
        $result["code"] = $code;
        $result["result"] = true;
    }catch(Exception $e) {
        $conn->rollback();
        $result["message"] = $e->getMessage();
    }
    return $response->json($result);
    // $service->partial('layouts/group2/new_sub_select_seat.php');
});

$klein->respond('GET', '/ticket/get/[:code]', function($request, $response, $service, $app, $validator){
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();
    $query = "Select * From G02_Ticket_history WHERE code=:code and return_ticket=0";
    $code = $request->code;
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":code", $code);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($result) == 0) {
        $service->flash("Code invalid");
        $service->back();
        return;
    }
    $showtime_id = $result[0]["showtime_id"];
    $data = $conn->query("select *
    from available_movies a
    join `G14_Branch` b on a.branch_id = b.`BranchID`
    join G09_Movie c on a.movie_id = c.`id`
    WHERE a.id=$showtime_id
    ")->fetchAll(PDO::FETCH_ASSOC);
    
    $service->tickets = $result;
    $service->movieTitle = $data[0]["title"];
    $service->branch = $data[0]["BranchName"];
    $service->room_no = $data[0]["room_no"];

    $a = new DateTime($data[0]["startTime"]);
    $service->startTime = $a->format("H:i");
    $b = new DateTime($data[0]["EndTime"]);
    $service->endTime = $b->format("H:i");
    
    // $response->dump($result);
    // $response->sendBody();
    // die;
    $service->partial("layouts/group2/new_showticket.php");
});
