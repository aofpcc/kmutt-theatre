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
    $service->render('layouts/group9/home.php');
});

$klein->respond('GET', '/group9/add', function ($request, $response, $service) {
    $service->bootstrap3 = false;
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
    extract($row);

    // echo json_encode($row);
    // echo $NAME;
    // echo '<br>';
    // echo $DETAIL;

    $service->id = $id;
    $service->render('layouts/group9/update.php');
});

$klein->respond('POST', '/group9/action', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

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

    // $response->dump($request);
    // $response->sendBody();
    //echo $_POST['studio_name'];
    //die;

    try {
      $conn->beginTransaction();

        $query = "INSERT INTO G09_Movie (title,detail,director,studio_name) VALUES ('$title','$describtion','$director','$studio_name')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $movie_id = $conn->lastInsertId();
        $query = "INSERT INTO G09_Length (id,length) VALUES ($movie_id,'$time')";
        // var_dump($query);
        // die;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        // $query = "INSERT INTO G09_Subtitle_copy (subtitle) VALUES ($subtitle)";
        // echo $query;
        // die;

        foreach ($languages as $language) {
            $query = "INSERT INTO G09_Soundtrack (id, soundtrack) VALUES ($movie_id, '$language')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            // echo $language[$i];
        }
        foreach ($subtitle as $subtitle) {
            $query = "INSERT INTO G09_Subtitle (id, subtitle) VALUES ($movie_id, '$subtitle')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            // echo $language[$i];
        }
        foreach ($gerne as $gerne) {
            $query = "INSERT INTO G09_Gerne (id, genre) VALUES ($movie_id, '$gerne')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            // echo $language[$i];
        }

        $conn->commit();
    } catch (Exception $e) {
        $conn->rollback();
        $response->dump($e);
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
    echo $query;
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

    $service->sqlResult = $arr;
    $service->searchKeyword = $MNAME;
    $service->render('layouts/group9/search.php');
});

$klein->respond('GET', '/group9/action888', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();

    $query = "SELECT * FROM G09_Movie";
    echo $query;
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

    $service->sqlResult = $arr;
    $service->searchKeyword = $Mname;
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

    $query = "UPDATE G09_Movie SET title = '$title' ,detail = '$describtion' ,director = '$director' WHERE id = '$id'";
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
    // $service->render('layouts/group9/update.php');
    $response->redirect("/emp/group9/update/$id");
});

$klein->respond('GET', '/group9/action/delete/[:id]', function ($request, $response, $service) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    global $database;
    $conn = $database->getConnection();

    $id = $request->id;

    $query = "DELETE FROM G09_Length WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $query = "DELETE FROM G09_Soundtrack WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $query = "DELETE FROM G09_Subtitle WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    $stmt = $conn->prepare($query);

    $stmt->execute();$query = "DELETE FROM G09_Gerne WHERE id = '$id'";
    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
    $stmt = $conn->prepare($query);
    $stmt->execute();

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
