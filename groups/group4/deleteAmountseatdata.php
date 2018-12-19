<?php
$klein->respond('POST', '/g04/Amountseat/del/[:id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $id = $request->id;


    $result = [
        "message" => null,
        "error" => null
    ];
    try {
        $conn->beginTransaction();
        $stmt = $conn->prepare("delete from G04_MSRnB_seatPerRoom WHERE id=:id");
        $room_id = $request->room_id;
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt = $conn->prepare("delete from G04_MSRnB_room WHERE id =:room_id");
        $stmt->bindParam(':room_id', $room_id);
        $stmt->execute();

        $conn->commit();

        $result["message"] = "Delete Success";
    }catch(PDOException $e){
        $conn->rollback();
        $result["error"] = $e->getMessage();
    }
    // var_dump($result);
    return $response->json($result);
});
