<?php
$klein->respond('GET', '/edit_showtime/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    $id = $request->showtime_id;
    // var_dump($roomtype_id);
    // die;

    //
    // MAIN QUERY
    //
    $query = "select s.id as showtime_id, br.BranchName, r.room_no, s.room_id, s.movie_id, m.title, s.subtitle, s.soundtrack, date(s.startTime), time(s.startTime), time(s.endTime)
    from G09_Movie m, G04_MSRnB_showingroom s, G04_MSRnB_room r, G14_Branch br
    where m.id = s.movie_id and r.id = s.room_id and br.branchID = r.branch_id and s.id = $id;";

    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    //
    // MOVIE
    //
    $query = "SELECT * FROM G09_Movie";
    $movies = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    //
    //Branch
    //
    $query = "select * from G14_Branch";
    $branches = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    //
    //Branch
    //
    $query = "select * from G09_Soundtrack";
    $soundtrack = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

      //
    //Branch
    //
    $query = "select * from G09_Subtitle";
    $subtitle = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    //
    // 
    //
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $service->data = $data[0];
    $service->movies = $movies;
    $service->branches = $branches;
    echo json_encode($data[0]);
    $service->render("layouts/group4/addshowtime/editshowtime.php");
});

$klein->respond('POST', '/g04/showTime/edit', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    // receive all data need
    // insert data into db using PDO, again PDO , PDO, PDO, PDO
    try {
        $stmt = $conn->prepare("update G04_MSRnB_showingroom 
        set movie_id =:movie_id, room_id=:room_id, soundtrack =:soundtrack, subtitle =:subtitle, startTime =:startTime, endTime =:endTime
        WHERE id=:id and room_id =:room_id");
        $movie_id = $request->movie_id;
        $room_id = $request->room_id;
        $startTime = $request->startTime;
        $endTime = $request->endTime;
        $soundtrack = $request->soundtrack;
        $subtitle = $request->subtitle;

            
            $stmt->bindParam(':movie_id', $movie_id);
            $stmt->bindParam(':room_id', $room_id);
            $stmt->bindParam(':soundtrack', $soundtrack);
            $stmt->bindParam(':subtitle', $subtitle);
            $stmt->bindParam(':startTime', $startTime);
            $stmt->bindParam(':endTime', $endTime);
        $stmt->execute();

        $service->flash("Edit Amount of Seat Success");
    } catch (PDOException $e) {
        $service->flash("Edit Amount of Seat Failed Beacuzs" . $e->getMessage());
    }

    $response->redirect("/emp/showAmountseat");
    $response->sendHeaders();
});