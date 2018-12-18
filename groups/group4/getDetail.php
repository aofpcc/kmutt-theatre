<?php
$klein->respond('GET', '/g04/movies/[:movie_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $query = "select *, ROUND(TIME_TO_SEC(length)/60, 0) as minute
    from G09_Movie
    where id = '$request->movie_id';";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($data) > 0)
        return json_encode($data[0]);
    return "{}";
});

$klein->respond('GET', '/g04/getroom/[:branch_id]', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $query = "select *
    from G04_MSRnB_room
    where branch_id = '$request->branch_id';";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll();
    return json_encode($data);
});

$klein->respond('GET', '/g04/showingroom', function ($request, $response, $service, $app, $validator) {
    $conn = $app->db->getConnection();
    $query = "select *
    from G04_MSRnB_showingroom WHERE startTime > NOW()";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($data);
});