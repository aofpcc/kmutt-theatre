<?php
$klein->respond('POST', '/g04/showTime/del/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $id = $request->showtime_id;
    $result = [
        "message" => null,
        "error" => null
    ];
    try {
        $stmt = $conn->prepare("update G04_MSRnB_showingroom set `movie_id` = :movie_id,`room_id` = :room_id,`startTime` = :startTime,`endTime` = :endTime where `id` = :showtime_id");
        $stmt->bindParam(':movie_id', $movie_id);
        $stmt->bindParam(':room_id', $room_id);
        $stmt->bindParam(':startTime', $startTime);
        $stmt->bindParam(':endTime', $endTime);
        $stmt->execute();
        $result["message"] = "Delete Success";
    }catch(PDOException $e){
        $result["error"] = $e->getMessage();
    }
    return $response->json($result);
});