<?php
$klein->respond('GET', '/group9', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $query = "SELECT * from G09_Movie ";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $num = $stmt->rowCount();
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->allMovies = $arr;
    $service->pageTitle = 'Fuck';
    // $service->render('layouts/group9/home.php');
    $response->redirect('/emp/group9/action888');
});

$klein->respond('GET', '/group9/add', function ($request, $response, $service, $app) {
    $conn = $app->db->getConnection();
    $query = "SELECT * from G09_Director";
    $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    // $response->dump($data);
    // $response->sendBody();
    // die;
    $query = "SELECT * from G09_Subtitle";
    $service->subtitles = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $query = "SELECT * from G09_Soundtrack";
    $service->soundtracks = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $query = "SELECT * from G09_Studio";
    $service->studio_name = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    // $response->dump($service->soundtracks);
    // $response->sendBody();
    // die;

    $query = "SELECT * from G09_Genre";
    $service->genre = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $service->bootstrap3 = false;
    $service->directors = $data;
    $service->render('layouts/group9/add.php');
});

$klein->respond('GET', '/group9/search', function ($request, $response, $service) {
    $service->render('layouts/group9/search.php');
});

$klein->respond('GET', '/group9/delete', function ($request, $response, $service) {
    $service->render('layouts/group9/delete.php');
});

$klein->respond('GET', '/group9/update/[:id]', function ($request, $response, $service) {
    $service->bootstrap3 = false;
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    global $database;
    $conn = $database->getConnection();

    // echo $request->id;
    $id = $request->id;

    $query = "SELECT * from G09_Movie WHERE id = $id";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $num = $stmt->rowCount();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // $service->movies = $row;
    // var_dump($row);
    // die;
    // extract($row);

    // echo json_encode($row);
    // echo $NAME;
    // echo '<br>';
    // echo $DETAIL;

    $service->id = $id;
    $service->render('layouts/group9/update.php');
});

$klein->respond('POST', '/group9/action', function ($request, $response, $service, $app) {
    $conn = $app->db->getConnection();

    $title = $request->title;
    $director = $request->director_id;
    $languages = $request->language;
    $gerne = $request->gerne;
    $time = $request->time;
    $studio_name = $_POST['studio_name'];
    $license = $request->license_price;
    $describtion = $request->des;
    $subtitle = $request->subtitle;

    $RELEASE_DATE = $request->bought_date;
    $END_DATE = $request->expired_date;

    // $response->dump($request);
    // $response->sendBody();
    // echo $_POST['studio_name'];
    // die;

    try {
        $conn->beginTransaction();
        $time = gmdate("H:i:s", $time*60);
        $query = "INSERT INTO G09_Movie (title,detail,director_id,studio_name, length) VALUES ('$title','$describtion','$director','$studio_name', '$time')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $movie_id = $conn->lastInsertId();
        // $query = "INSERT INTO G09_Subtitle_copy (subtitle) VALUES ($subtitle)";
        // echo $query;
        // die;

        $path = $_FILES['image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $target_file = "/layouts/group9/image/$movie_id." . $ext;

        // $query = "SELECT * from G09_Movie_Name";
        // $x = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($x);
        // $conn->rollback();
        // die;

        $query = "UPDATE G09_Movie
        set image =:image
        WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $movie_id);
        $stmt->bindParam(":image", $target_file);
        $stmt->execute();

        foreach ($languages as $lng) {
            $query = "INSERT INTO G09_Soundtrack_Movie (id, soundtrack) VALUES ($movie_id, '$lng')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
        }

        foreach ($subtitle as $sub) {
            $query = "INSERT INTO G09_Subtitle_Movie (id, subtitle) VALUES ($movie_id, '$sub')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
        }

        foreach ($gerne as $g) {
            $query = "INSERT INTO G09_Genre_Movie (id, genre) VALUES ($movie_id, '$g')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            // echo $language[$i];
        }

        // image section
        
        $target_file = "/../..".$target_file;
        if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . $target_file)) {
            
        } else {
            throw new Exception("Kuy");
        }
        $conn->commit();
    } catch (Exception $e) {
        $conn->rollback();
        $response->dump($e->getMessage());
        $response->sendBody();
        die;
        var_dump($e->getMessage());
        die;
    }

    // $num = $stmt->rowCount();
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     echo "id : ".$id.", name : ".$name."\n";
    //   }
    // }
    // die;

    // echo 'success';
    $service->flash("Add Success");
    $response->redirect("/emp/group9/add");
});

$klein->respond('POST', '/group9/action2', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $MNAME = $_POST['Mname'];
    $query = "SELECT * FROM G09_Movie WHERE title LIKE '%$MNAME%'";
    //echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // $num = $stmt->rowCount();
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     echo "id : ".$id.", name : ".$name."\n";
    //   }
    // }
    // die;

    // echo 'success';

    $num = $stmt->rowCount();
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->movies = $arr;
    $service->searchKeyword = $MNAME;
    $service->render('layouts/group9/search.php');
});

$klein->respond('GET', '/group9/action888', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $query = "SELECT * FROM G09_Movie";
    // echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // $num = $stmt->rowCount();
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     echo "id : ".$id.", name : ".$name."\n";
    //   }
    // }
    // die;

    // echo 'success';

    $num = $stmt->rowCount();
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->movies = $arr;
    $service->searchKeyword = (isset($Mname)) ? $Mname : '';
    $service->render('layouts/group9/search.php');
});

$klein->respond('POST', '/group9/action3', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $MNAME = $request->Mname;

    $query = "SELECT * FROM movies WHERE movies.name = '$MNAME'";
    echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $num = $stmt->rowCount();
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->sqlResult = $arr;
    $service->render('layouts/group9/search.php');
});

$klein->respond('POST', '/group9/action/update', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $id = $request->id;
    $title = $request->title;
    $director = $request->director;
    $languages = $request->language;
    $gerne = $request->gerne;
    $time = $request->time;
    $studio_name = $_POST['studio_name'];
    $license = $request->license_price;
    $describtion = $request->des;
    $subtitle = $request->subtitle;

    $RELEASE_DATE = $request->bought_date;
    $END_DATE = $request->expired_date;

    $query = "UPDATE G09_Movie SET title = '$title' ,detail = '$describtion' , length = '$time' WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    // var_dump($query);
    // die;    
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // $num = $stmt->rowCount();
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     echo "id : ".$id.", name : ".$name."\n";
    //   }
    // }
    // die;

    // echo 'success';
    // $service->sqlResult = 'DATA INSERTED';
    // $service->render('layouts/group9/update.php');
    $service->flash("Update Success");
    $response->redirect("/emp/group9/update/$id");
});

$klein->respond('GET', '/group9/action/delete/[:id]', function ($request, $response, $service) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    global $database;
    $conn = $database->getConnection();

    $id = $request->id;

    //$query = "DELETE FROM G09_Length WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
   // $stmt = $conn->prepare($query);
   // $stmt->execute();

    //$query = "DELETE FROM G09_Soundtrack WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    //$stmt = $conn->prepare($query);
    //$stmt->execute();

    //$query = "DELETE FROM G09_Subtitle WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    //$stmt = $conn->prepare($query);

    // $query = "DELETE FROM G09_Genre_Movie WHERE id = '$id'";
    // //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    // $stmt = $conn->prepare($query);
    // $stmt->execute();

    $query = "DELETE FROM G09_Movie WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // $num = $stmt->rowCount();
    // if($num > 0) {
    //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);
    //     echo "id : ".$id.", name : ".$name."\n";
    //   }
    // }
    // die;

    // echo 'success';
    // $service->sqlResult = 'DATA INSERTED';
    $response->redirect("/emp/group9/action888");
    // $response->redirect('javascript://history.go(-1);');
    // $response->redirect('javascript://location.reload();');
});

// $klein->respond('GET', '/group9/edit/[:id]', function ($request, $response, $service, $app) {
//     $conn = $app->db->getConnection();
//     $query = "SELECT * from G09_Director";
//     $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
//     // $response->dump($data);
//     // $response->sendBody();
//     // die;
//     $query = "SELECT * from G09_Subtitle";
//     $service->subtitles = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $query = "SELECT * from G09_Soundtrack";
//     $service->soundtracks = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $query = "SELECT * from G09_Studio";
//     $service->studio_name = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     // $response->dump($service->soundtracks);
//     // $response->sendBody();
//     // die;

//     $query = "SELECT * from G09_Genre";
//     $service->genre = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $service->bootstrap3 = false;
//     $service->directors = $data;
//     $service->render('layouts/group9/add.php');
// });
// $klein->respond('POST', '/group9/edit/[:id]', function ($request, $response, $service, $app) {
//     $conn = $app->db->getConnection();
//     $query = "SELECT * from G09_Director";
//     $data = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
//     // $response->dump($data);
//     // $response->sendBody();
//     // die;
//     $query = "SELECT * from G09_Subtitle";
//     $service->subtitles = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $query = "SELECT * from G09_Soundtrack";
//     $service->soundtracks = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $query = "SELECT * from G09_Studio";
//     $service->studio_name = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     // $response->dump($service->soundtracks);
//     // $response->sendBody();
//     // die;

//     $query = "SELECT * from G09_Genre";
//     $service->genre = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

//     $service->bootstrap3 = false;
//     $service->directors = $data;
//     $service->render('/layouts/group9/update.php');
// });
// $klein->respond('POST', '/group9/daction', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();

//   $MNAME = $request->Mname;

//   $query = "SELECT * FROM movies WHERE movies.name LIKE '%$MNAME%'";
//   echo $query;
//   $stmt = $conn->prepare($query);
//   $stmt->execute();

//   // $num = $stmt->rowCount();
//   // if($num > 0) {
//   //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//   //     extract($row);
//   //     echo "id : ".$id.", name : ".$name."\n";
//   //   }
//   // }
//   // die;

//   // echo 'success';

//   $num = $stmt->rowCount();
//   $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

//   $service->sqlResult = $arr;
//   $service->render('layouts/group9/delete.php');
// });
