<?php
$klein->respond('POST', '/g04/Amountseat/del/[:id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $id = $request->id;
    $result = [
        "message" => null,
        "error" => null
    ];
    try {
        $stmt = $conn->prepare("delete from G04_MSRnB_seatPerRoom WHERE id=:id and room_id =:room_id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':room_id', $room_id);
        $stmt->execute();
        $result["message"] = "Delete Success";
    }catch(PDOException $e){
        $result["error"] = $e->getMessage();
    }
    // var_dump($result);
    return $response->json($result);
});
