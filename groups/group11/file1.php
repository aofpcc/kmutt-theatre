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

$klein->respond(['GET', 'POST'], "/teststaff", function ($request, $response, $service, $app, $validator) {
  $response->redirect("/staff/employee");
  $response->sendHeaders();
});
$klein->with("/teststaff", function () use ($klein) {
  // $klein->service()->layout('layouts/core/default.php');
  $klein->respond(['GET', 'POST'], "/", function ($request, $response, $service, $app, $validator) {
      $response->redirect("/staff/employee");
      $response->sendHeaders();
  });
});

$klein->respond('POST', '/staff/login', function ($request, $response, $service, $app, $validator) {
  $app->login->perform($request->username, $request->password, "/teststaff");
});
$klein->respond('GET', '/staff', function ($request, $response, $service, $app, $validator) {
  $err = $service->flashes();
  if ($err && $err["info"]) {
      $service->errs = $err["info"];
  }
  $service->render('layouts/group11/login.php', $app->passValue);
});

$klein->respond(['GET', 'POST'], '/staff/logout', function ($request, $response, $service, $app, $validator) {
  // $app->login->logout();
  $app->login->logoutThenGoTo("/staff");
  // $response->sendHeaders();
});

// $klein->respond('GET', '/staff', function ($request, $response, $service) {
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//   $service->render('layouts/group11/login.php');
// });

// $klein->respond('POST', '/staff', function ($request, $response, $service) {

//   // username & pass
//   $username = $request->username;
//   // $password = $request->password;
//   //hash
//   $password =  hash('md5', $request->password);
//   // connect db
//   global $database;
//   $conn = $database->getConnection();

//    //update token
//    $token = md5(uniqid($username,true));
//    $query2 = "UPDATE G11_Emp_login SET Token = '$token' WHERE Email = '$username' AND Pass = '$password' ";
//    //echo "Here is an query code >>>>>>> " .$query ."<<<<<<<<";
//    $stmt = $conn->prepare($query2);
//    $stmt->execute();

//   $query = "SELECT * FROM G11_Emp_login WHERE Email = '$username' and pass = '$password'";
//   $stmt = $conn->prepare($query);
//   $stmt->execute();

//   // $arr = $stmt->fetch(PDO::FETCH_ASSOC);
//   // echo ($arr["G11_Emp_id"])."<br>";

//   $resultCount = $stmt->rowCount();
//   if ($resultCount == 1) {
//     session_start();
//     $_SESSION['token'] =  $token;
//     $response->redirect('/staff/employee');
//     $response->send();
//   }
//   else {
//     $service->error = "Your Login Name or Password is invalid";
//     $service->render('layouts/group11/login.php');
//   }
// });

$klein->respond('GET', '/staff/employee', function ($request, $response, $service) {
  $service->nameTag = 'dashboard.php';
  $response->redirect('/staff/employee/dashboard');
});

$klein->respond('GET', '/staff/employee/dashboard', function ($request, $response, $service, $app, $validator) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  //check login
  $detail = $app->login->requireLogin('customer');
   // connect db
   global $database;
   $conn = $database->getConnection();

  //  session_start();
  //  $key = $_SESSION['token'];

   //select table
  //  $query = "SELECT Token FROM G11_Emp_login WHERE Token = '$key'";
  //  $stmt = $conn->prepare($query);
  //  $stmt->execute();

   //check accout
  // $resultCount2 = $stmt->rowCount();
  // if($resultCount2 == 1){

    //all employee
    $query = "SELECT * from G11_Emp_staff ORDER BY Status, Firstname ASC" ;
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);


  $service->nameTag = 'dashboard.php';
  $service->render('layouts/group11/employee.php');
  // }else{
  //   $response->redirect('/staff');
  //   $response->send();
  // }
});

$klein->respond('GET', '/staff/employee/profile', function ($request, $response, $service) {
    ini_set('display_errors', 1);

   // connect db
   global $database;
   $conn = $database->getConnection();

  //  session_start();
   $key = $_SESSION['token'];

   //select table
   $query = "SELECT Token FROM G11_Emp_login WHERE Token = '$key'";
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
      ini_set('display_errors', 1);

       // connect db
   global $database;
   $conn = $database->getConnection();

  //  session_start();
   $key = $_SESSION['token'];

   //select table
   $query = "SELECT Token FROM G11_Emp_login WHERE Token = '$key'";
   $stmt = $conn->prepare($query);
   $stmt->execute();

   //check accout
  $resultCount2 = $stmt->rowCount();
    if($resultCount2 == 1){

      $service->nameTag = 'finance.php';
      // $service->name =$_SESSION['name'];
      // connect db
      global $database;
      $conn = $database->getConnection();

      $revenue = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Revenue")->fetchAll(PDO::FETCH_BOTH);
      $service->revenue = $revenue;

      $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses")->fetchAll(PDO::FETCH_BOTH);
      $service->expenses = $expenses;

      $service->render('layouts/group11/employee.php');
      }else{
        $response->redirect('/staff');
        $response->send();
      }
});

$klein->respond('GET', '/staff/logouts', function ($request, $response, $service) {
    ini_set('display_errors', 1);

    // session_start();

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
    $list = $conn->query("SELECT dName , sum(amount) as total FROM G03_FIN_ID as FinancialID, G03_FIN_Revenue as Revenue
                          WHERE Revenue.FinID = FinancialID.id
                          GROUP BY dName")
                          ->fetchAll(PDO::FETCH_BOTH);

    $service->list = $list;

        $revenueGrahp = $conn->query("  SELECT  sum(amount)
                                        FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
                                        GROUP BY year(date),month(date)
                                      ")->fetch(PDO::FETCH_ASSOC);

        $revenueDate = $conn->query("   SELECT  month(date) as month , '|' ,year(date) as year
                                        FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
                                        GROUP BY year(date),month(date)
                                      ")->fetch(PDO::FETCH_ASSOC);


        $revenueList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.Fname as memFN, m.Lname as memLN, amount
                                      FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                      WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e. Emp_ID AND Revenue.customerID = m.MemberID")->fetchAll(PDO::FETCH_BOTH);

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
      $list = $conn->query("SELECT dName , sum(amount) as total FROM G03_FIN_ID as FinancialID, G03_FIN_Expenses as Expenses
                            WHERE Expenses.FinID = FinancialID.id
                            GROUP BY dName")
                            ->fetchAll(PDO::FETCH_BOTH);
      $service->list = $list;

          $expensesList = $conn->query(" SELECT transactionId, dName, date, e.FirstName as empFN, e.LastName as empLN, m.FName as memFN, m.LName as memLN, amount
                                        FROM G03_FIN_Expenses as Expenses, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Expenses.FinID = FinancialID.ID AND Expenses.empID = e.Emp_id AND Expenses.customerID = m.MemberID")->fetchAll(PDO::FETCH_BOTH);
          $service->pageTitle = 'Expense';
          $service->expensesList = $expensesList;
          echo($service->nameTag);
         $service->render('layouts/group11/employee.php');
        echo($service->nameTag);
    });

$klein->respond('GET', '/staff/employee/statistics', function ($request, $response, $service) {
  // connect db
    global $database;
    $conn = $database->getConnection();
    $service->nameTag = 'statistics.php';

        
        // // NO movie table in the new DB yet..
        // $gene = $conn->query("SELECT Gene, COUNT(*) 
        //                       FROM G02_Ticket_history as ticket, movies 
        //                       WHERE ticket.movie_id = movies.ID 
        //                       GROUP BY  Gene")->fetchAll(PDO::FETCH_BOTH);
        // $service->gene = $gene;

        $productName = $conn->query("SELECT productName, COUNT(*) 
                                     FROM G13_FNB_detail as detail_fnb, G13_FNB_ProductList as productList_fnb 
                                     WHERE productList_fnb.ProductID  = detail_fnb.ProductID 
                                     GROUP BY  detail_fnb.ProductID, productName ")->fetchAll(PDO::FETCH_BOTH);
        $service->productName = $productName;

        $morning= $conn->query("SELECT Count(*) as morning 
                                from G04_MSRnB_showingroom 
                                where hour(startTime) >= 8 AND hour(startTime) <= 12 ")->fetchAll(PDO::FETCH_BOTH);
        $service->morning = $morning;

        $afternoon = $conn->query("SELECT COUNT(*) as afternoon 
                                   from G04_MSRnB_showingroom 
                                   where hour(startTime) >= 13 AND hour(startTime) <= 17")->fetchAll(PDO::FETCH_BOTH);
        $service->afternoon = $afternoon;

        $evening = $conn->query("SELECT COUNT(*) as evening 
                                 from G04_MSRnB_showingroom 
                                 where hour(startTime) >= 18 AND hour(startTime) <= 20")->fetchAll(PDO::FETCH_BOTH);
        $service->evening = $evening;

        $midnight = $conn->query("SELECT COUNT(*) as midnight 
                                  from G04_MSRnB_showingroom 
                                  where hour(startTime) >= 21 AND hour(startTime) <= 6")->fetchAll(PDO::FETCH_BOTH);
        $service->midnight = $midnight;

    $service->render('layouts/group11/employee.php');
    echo($service->nameTag);
});