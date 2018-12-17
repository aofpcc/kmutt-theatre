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
  // error_reporting(E_ALL); 
  // ini_set('display_errors', 1);

  global $database;
  $conn = $database->getConnection();

  // echo $request->id;
  $id = $request->id;

  $query = "SELECT * from movies WHERE ID = $id";
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
  $service->name = $NAME;
  $service->length = $LENGTH;
  $service->des = $DETAIL;
  $service->render('layouts/group9/update.php');
});

$klein->respond('POST', '/group9/action', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $title = $request->title;
  $director = $request->director;
  $language = $request->lang;
  $gerne = $request->gerne;
  $time = $request->time;
  $studio_name = $request->studio_name;
  $license = $request->license_price;
  $describtion = $request->des;
  $subtitle = $request->sub;

  $RELEASE_DATE = $request->bought_date;
  $END_DATE = $request->expired_date;

  $response->dump($request->language);
  $response->sendBody();
  die;
  
  $query = "INSERT INTO G09_Movie (title,detail,director,gerne,studio_name) VALUES ('$title','$describtion','$director','$gerne','$studio_name')";
  $query = "INSERT INTO G09_Length (length) VALUES ('$time')";
  $query = "INSERT INTO G09_Soundtrack (soundtrack) VALUES ($language)";
  $query = "INSERT INTO G09_Subtitle (subtitle) VALUES ($subtitle)";
  // echo $query;
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
  $service->sqlResult = 'DATA INSERTED';
  $service->render('layouts/group9/add.php');
});

$klein->respond('POST', '/group9/action2', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $MNAME = $request->Mname;

  $query = "SELECT * FROM movies WHERE movies.name LIKE '%$MNAME%'";
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

$klein->respond('GET', '/group9/action888', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();


  $query = "SELECT * FROM movies";
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
  $ID = $request->id;
  $NAME = $request->title;
  $DETAIL = $request->des;
  $LENGTH = $request->time;
  $LNG = $request->lang;
  //echo "[[3]]";
  $RELEASE_DATE = $request->dateRelease;
  $END_DATE = $request->dateEnd;
  $query = "UPDATE movies SET NAME = '$NAME' ,DETAIL = '$DETAIL' ,LENGTH = '$LENGTH' ,LNG = '$LNG' ,RELEASE_DATE = '$RELEASE_DATE' ,END_DATE = '$END_DATE' WHERE movies.ID = '$ID'";
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
  $response->redirect("/group9/update/$ID");
});

$klein->respond('GET', '/group9/action/delete/[:id]', function ($request, $response, $service) {
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);

  global $database;
  $conn = $database->getConnection();

  $ID = $request->id;

  $query = "DELETE FROM movies WHERE movies.ID = '$ID'";
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
  $response->redirect("/group9/action888");
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
