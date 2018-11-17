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
  // $password = $request->password;
  //hash
  $password =  hash('md5', $request->password);
  // connect db
  global $database;
  $conn = $database->getConnection();

   //update token
   $token = md5(uniqid($username,true));
   $query2 = "UPDATE Emp_login SET Token = '$token' WHERE Email = '$username' AND Pass = '$password' ";
   //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
   $stmt = $conn->prepare($query2);
   $stmt->execute();

  $query = "SELECT * FROM Emp_login WHERE Email = '$username' and pass = '$password'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  // $arr = $stmt->fetch(PDO::FETCH_ASSOC);
  // echo ($arr["Emp_id"])."<br>";

  $resultCount = $stmt->rowCount();
  if ($resultCount == 1) {
    session_start();
    $_SESSION['token'] =  $token;
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

   // connect db
   global $database;
   $conn = $database->getConnection();

   session_start();
   $key = $_SESSION['token'];

   //select table
   $query = "SELECT Token FROM Emp_login WHERE Token = '$key'";
   $stmt = $conn->prepare($query);
   $stmt->execute();

   //check accout
  $resultCount2 = $stmt->rowCount();
  if($resultCount2 == 1){
  $service->nameTag = 'dashboard.php';
  $service->render('layouts/group11/employee.php');
  }else{
    $response->redirect('/staff');
    $response->send();
  }
  });

  $klein->respond('GET', '/staff/employee/profile', function ($request, $response, $service) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

   // connect db
   global $database;
   $conn = $database->getConnection();

   session_start();
   $key = $_SESSION['token'];

   //select table
   $query = "SELECT Token FROM Emp_login WHERE Token = '$key'";
   $stmt = $conn->prepare($query);
   $stmt->execute();

   //check accout
  $resultCount2 = $stmt->rowCount();
    if($resultCount2 == 1){

    $service->nameTag = 'profile.php';
    // $service->name =$_SESSION['name'];
    $service->render('layouts/group11/employee.php');
    }else{
      $response->redirect('/staff');
      $response->send();
    }
    });

    $klein->respond('GET', '/staff/employee/finance', function ($request, $response, $service) {
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

       // connect db
   global $database;
   $conn = $database->getConnection();

   session_start();
   $key = $_SESSION['token'];

   //select table
   $query = "SELECT Token FROM Emp_login WHERE Token = '$key'";
   $stmt = $conn->prepare($query);
   $stmt->execute();

   //check accout
  $resultCount2 = $stmt->rowCount();
    if($resultCount2 == 1){

      $service->nameTag = 'finance.php';
      // $service->name =$_SESSION['name'];
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

    $klein->respond('GET', '/staff/employee/revenue', function ($request, $response, $service) {
        // connect db
        global $database;
        $conn = $database->getConnection();
        $service->nameTag = 'revenue.php';
        //select table
        $list = $conn->query("SELECT dName , sum(amount) as total FROM FinancialID,Revenue
                              WHERE Revenue.FinID = FinancialID.id
                              GROUP BY dName")
                              ->fetchAll(PDO::FETCH_BOTH);
        $service->list = $list;
        $revenueGrahp = $conn->query("  SELECT  sum(amount)
                                        FROM  Revenue, FinancialID, Membership as m, employee as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.EmpID AND Revenue.customerID = m.ID 
                                        GROUP BY year(date),month(date) 
                                      ")
        $revenueDate = $conn->query("   SELECT  month(date), '|' ,year(date)
                                        FROM  Revenue, FinancialID, Membership as m, employee as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.EmpID AND Revenue.customerID = m.ID 
                                        GROUP BY year(date),month(date) 
                                      ")
        $revenueList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FirstName as memFN, m.LastName as memLN, amount
                                      FROM Revenue, FinancialID, Membership as m, employee as e
                                      WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e. EmpID AND Revenue.customerID = m.ID")->fetchAll(PDO::FETCH_BOTH);
        $service->pageTitle = 'Financial';
        $service->revenueList = $revenueList;
        $service->render('layouts/group11/employee.php');
        echo($service->nameTag);
    });

    $klein->respond('GET', '/staff/employee/expense', function ($request, $response, $service) {

        $service->nameTag = 'expense.php';
        // connect db
          global $database;
          $conn = $database->getConnection();
          $service->nameTag = 'expense.php';


          //select table
          $list = $conn->query("SELECT dName , sum(amount) as total FROM FinancialID,Expenses
                                WHERE Expenses.FinID = FinancialID.id
                                GROUP BY dName")
                                ->fetchAll(PDO::FETCH_BOTH);
          $service->list = $list;

          $expensesList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FirstName as memFN, m.LastName as memLN, amount
                                        FROM Expenses, FinancialID, Membership as m, employee as e
                                        WHERE Expenses.FinID = FinancialID.ID AND  Expenses.empID = e. EmpID AND Expenses.customerID = m.ID")->fetchAll(PDO::FETCH_BOTH);
          $service->pageTitle = 'Expense';
          $service->expensesList = $expensesList;
          echo($service->nameTag);
        $service->render('layouts/group11/employee.php');
        echo($service->nameTag);
    });

    $klein->respond('GET', '/staff/employee/statistics', function ($request, $response, $service) {

        $service->nameTag = 'statistics.php';
        $service->render('layouts/group11/employee.php');
        echo($service->nameTag);
    });
