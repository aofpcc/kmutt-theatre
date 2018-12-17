<?php
$klein->respond('POST', '/g04/roomType/del/[:id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $id = $request->id;
    $result = [
        "message" => null,
        "error" => null
    ];
    try {
        $stmt = $conn->prepare("delete from G04_MSRnB_roomtype WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result["message"] = "Delete Success";
    }catch(PDOException $e){
        $result["error"] = $e->getMessage();
    }
    // var_dump($result);
    return $response->json($result);
});
