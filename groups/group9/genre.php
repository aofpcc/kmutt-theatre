<?php
$klein->respond('GET', '/genre/add', function ($request, $response, $service, $app, $validator) {
    $service->bootstrap3 = false;
    $service->render('layouts/group9/genre/add.php');
});

$klein->respond('POST', '/genre/add', function ($request, $response, $service, $app, $validator) {
    // $response->dump($request);
    // $response->sendBody();
    $conn = $app->db->getConnection();
    try {
        $query = "Insert into G09_Genre(genre)
    values(:genre);";
        $genre = $request->genre;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":genre", $genre);
        $stmt->execute();
        $service->flash('Add Genre Success');
    } catch (Exception $e) {
        $service->flash("Add Failed ! " . $e->getMessage());
    }
    $response->redirect('/emp/genre/add');
    $response->sendHeaders();
});