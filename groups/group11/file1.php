<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$klein->respond('GET', '/group11', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from employee";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  $service->allMovies = $arr;
  $service->pageTitle = 'Hello';
  $service->render('layouts/group11/home.php');
});

$klein->respond('GET', '/login', function ($request, $response, $service) {
error_reporting(E_ALL); 
ini_set('display_errors', 1);

  $service->render('layouts/group11/login.php');
});

$klein->respond('POST', '/login/auth', function ($request, $response, $service) {
  
  // username & pass
  $username = $request->username;
  $password = $request->password;

  // connect db
  global $database;
  $conn = $database->getConnection();
  
  $query = "SELECT * FROM employee WHERE Email = '$username' and pass = '$password'";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  
  $resultCount = $stmt->rowCount();
  // $result = $stmt->fetchAll(PDO::FETCH_BOTH);
  if ($resultCount == 1) {
    session_start();
    $_SESSION['name'] = $username;
    $response->redirect('/employee');
    $response->send();
  }
  else {
    $service->error = "Your Login Name or Password is invalid";
    $service->render('layouts/group11/login.php');
  }
});


$klein->respond('GET', '/employee', function ($request, $response, $service) {
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);
  
  session_start();
  if($_SESSION['name'] !=""){
  $service->name =$_SESSION['name'];
  $service->render('layouts/group11/employee.php');
  }else{
    $response->redirect('/login');
    $response->send();
  }
  });

  $klein->respond('GET', '/logout', function ($request, $response, $service) {
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    
    session_start();
   
    if(session_destroy()) {
      $response->redirect('/login');
      $response->send();
    }
    });