<?php
$klein->respond('POST', '/g04/showTime/del/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $id = $request->showtime_id;
    $result = [
        "message" => null,
        "error" => null
    ];
    try {
        $stmt = $conn->prepare("delete from G04_MSRnB_showingroom WHERE id=:showtime_id");
        $stmt->bindParam(':showtime_id', $id);
        $stmt->execute();
        $result["message"] = "Delete Success";
    }catch(PDOException $e){
        $result["error"] = $e->getMessage();
    }
    return $response->json($result);
});
