<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

// $klein->respond('GET', '/group11', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();

//   $query = "SELECT * from employee";
//   $stmt = $conn->prepare($query);
//   $stmt->execute();

//   $num = $stmt->rowCount();
//   $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

//   $service->allMovies = $arr;
//   $service->pageTitle = 'Hello';
//   $service->render('layouts/group11/home.php');
// });

$klein->respond('GET', '/staff', function ($request, $response, $service) {
error_reporting(E_ALL); 
ini_set('display_errors', 1);

  $service->render('layouts/group11/login.php');
});

$klein->respond('POST', '/staff', function ($request, $response, $service) {
  
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
  if ($resultCount == 1) {
    session_start();
    $_SESSION['name'] = $username;
    $_SESSION['pass'] = $password;
    $response->redirect('/staff/employee');
    $response->send();
  }
  else {
    $service->error = "Your Login Name or Password is invalid";
    $service->render('layouts/group11/login.php');
  }
});

$klein->respond('GET', '/staff/employee', function ($request, $response, $service) {
  $service->nameTag = 'dashboard.php';
  $response->redirect('/staff/employee/dashboard');
});

$klein->respond('GET', '/staff/employee/dashboard', function ($request, $response, $service) {
  error_reporting(E_ALL); 
  ini_set('display_errors', 1);
  
  session_start();
  if($_SESSION['name'] !="" &&  $_SESSION['pass'] !=""){
  $service->nameTag = 'dashboard.php'; 
  $service->name =$_SESSION['name'];
  $service->render('layouts/group11/employee.php');
  }else{
    $response->redirect('/staff');
    $response->send();
  }
  });

  $klein->respond('GET', '/staff/employee/profile', function ($request, $response, $service) {
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    
    session_start();
    if($_SESSION['name'] !=""){
    
    $service->nameTag = 'profile.php'; 
    $service->name =$_SESSION['name'];
    $service->render('layouts/group11/employee.php');
    }else{
      $response->redirect('/staff');
      $response->send();
    }
    });

    $klein->respond('GET', '/staff/employee/finance', function ($request, $response, $service) {
      error_reporting(E_ALL); 
      ini_set('display_errors', 1);
      
      session_start();
      if($_SESSION['name'] !=""){
      
      $service->nameTag = 'finance.php'; 
      $service->name =$_SESSION['name'];
      $service->render('layouts/group11/employee.php');
      }else{
        $response->redirect('/staff');
        $response->send();
      }
      });

  $klein->respond('GET', '/staff/logout', function ($request, $response, $service) {
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    
    session_start();
   
    if(session_destroy()) {
      $response->redirect('/staff');
      $response->send();
    }
    });