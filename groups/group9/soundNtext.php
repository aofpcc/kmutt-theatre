<?php
$klein->respond('GET', '/soundtrack/add', function ($request, $response, $service, $app, $validator) {
    $service->bootstrap3 = false;
    $service->render('layouts/group9/soundtrack/add.php');
});

$klein->respond('POST', '/soundtrack/add', function ($request, $response, $service, $app, $validator) {
    // $response->dump($request);
    // $response->sendBody();
    $conn = $app->db->getConnection();
    try {
        $query = "Insert into G09_Soundtrack(language)
    values(:language);";
        $language = $request->language;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":language", $language);
        $stmt->execute();
        $service->flash('Add Soundtrack Success');
    } catch (Exception $e) {
        $service->flash("Add Failed ! " . $e->getMessage());
    }
    $response->redirect('/emp/soundtrack/add');
    $response->sendHeaders();
});

$klein->respond('GET', '/subtitle/add', function ($request, $response, $service, $app, $validator) {
    $service->bootstrap3 = false;
    $service->render('layouts/group9/subtitle/add.php');
});

$klein->respond('POST', '/subtitle/add', function ($request, $response, $service, $app, $validator) {
    // $response->dump($request);
    // $response->sendBody();
    $conn = $app->db->getConnection();
    try {
        $query = "Insert into G09_Subtitle(language)
    values(:language);";
        $language = $request->language;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":language", $language);
        $stmt->execute();
        $service->flash('Add Subtitle Success');
    } catch (Exception $e) {
        $service->flash("Add Failed ! " . $e->getMessage());
    }
    $response->redirect('/emp/subtitle/add');
    $response->sendHeaders();
});
