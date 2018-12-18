<?php
$klein->respond('GET', '/director/add', function ($request, $response, $service, $app, $validator) {
    $service->bootstrap3 = false;
    $service->render('layouts/group9/director/add.php');
});

$klein->respond('POST', '/director/add', function ($request, $response, $service, $app, $validator) {
    // $response->dump($request);
    // $response->sendBody();
    $conn = $app->db->getConnection();
    try {
        $query = "Insert into G09_Director(fname, lname, bio)
    values(:fname, :lname, :bio);";

        $fname = $request->fname;
        $lname = $request->lname;
        $bio = $request->bio;
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":bio", $bio);
        $stmt->execute();
        $service->flash('Add Director Success');

    } catch (Exception $e) {
        $service->flash("Add Failed ! " . $e->getMessage());
    }
    $response->redirect('/emp/director/add');
    $response->sendHeaders();
});
