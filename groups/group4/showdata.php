<?php
$klein->respond('GET', '/showtime', function ($request, $response, $service, $app, $validator) {
    $service->title = "Showing Time - Movie";
    $service->bootstrap3 = false;
    $conn = $app->db->getConnection();

    $query1 = "select s.id as showtime_id, br.BranchName, r.room_no, m.title, s.subtitle, s.`soundtrack`, date(s.startTime), time(s.startTime), time(s.endTime)
    from G09_Movie m, G04_MSRnB_showingroom s, G04_MSRnB_room r, G14_Branch br
    where m.id = s.movie_id and r.id = s.room_id and br.branchID = r.branch_id
    order by date(s.startTime),r.id, time(s.startTime), time(s.endTime) asc";

    // echo "<table class='uk-table uk-table-striped'><tr><td>Showtime id</td><td>Branch</td><td>Room no</td><td>Movie title</td>
    // <td>Language</td><td>Date</td><td>Start Time</td><td>End Time</td></tr>";

    // while($query2 = $query1->fetch()()){
    //     echo "<tr><td>".$query2['showtime_id']."</td>";
    //     echo "<tr><td>".$query2['BranchName']."</td>";
    //     echo "<tr><td>".$query2['room_no']."</td>";
    //     echo "<tr><td>".$query2['title']."</td>";
    //     echo "<tr><td>".$query2['language']."</td>";
    //     echo "<tr><td>".$query2['date(s.startTime)']."</td>";
    //     echo "<tr><td>".$query2['time(s.startTime)']."</td>";
    //     echo "<tr><td>".$query2['time(s.endTime)']."</td>";
    // }

    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $service->data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // return $response->json($service->data);
    $service->render("layouts/group4/addshowtime/deleteshowtime.php");
});

