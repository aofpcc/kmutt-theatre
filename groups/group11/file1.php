<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$klein->respond(['GET', 'POST'], "/teststaff", function ($request, $response, $service, $app, $validator) {
  $response->redirect("/emp/staff/employee");
  $response->sendHeaders();
});
$klein->with("/emp/teststaff", function () use ($klein) {
  // $klein->service()->layout('layouts/core/default.php');
  $klein->respond(['GET', 'POST'], "/", function ($request, $response, $service, $app, $validator) {
      $response->redirect("/emp/staff/employee");
      $response->sendHeaders();
  });
});

$klein->respond('POST', '/staff/login', function ($request, $response, $service, $app, $validator) {
  $app->login->perform($request->username, $request->password, "/emp/teststaff");
});

$klein->respond('GET', '/staff', function ($request, $response, $service, $app, $validator) {
  $service->bootstrap3 = false; // means using bootstrap4
  $service->render('layouts/group11/login.php');
});

$klein->respond(['GET', 'POST'], '/staff/logout', function ($request, $response, $service, $app, $validator) {
  $app->login->logoutThenGoTo("/emp/staff");
});


$klein->respond('GET', '/staff/employee', function($request, $response, $service, $app, $validator) {
  $service->nameTag = 'dashboard.php';
  $response->redirect('/emp/staff/employee/dashboard');
});

$klein->respond('GET', '/staff/employee/dashboard', function ($request, $response, $service, $app, $validator) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  //check login
   $data = $app->login->LoginThenGoTo('employee','/emp/staff');
  //  echo($data['userID']);

   // connect db
   global $database;
   $conn = $database->getConnection();

  //select
  $query = "SELECT * from G11_Emp_staff ORDER BY Status, Firstname ASC" ;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);


  $service->nameTag = 'dashboard.php';
  $service->render('layouts/group11/employee.php');

});

$klein->respond('GET', '/staff/employee/profile', function($request, $response, $service, $app, $validator) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //check login
  $data = $app->login->LoginThenGoTo('employee','/emp/staff');

  // connect db
  global $database;
  $conn = $database->getConnection();

 //select db
  // $service->$id = $data['userID'];
  $id = $data['userID'];
  $profileName = "SELECT * FROM G11_Emp_staff WHERE userID = $id " ;
  $stmt = $conn->prepare($profileName);
  $stmt->execute();
  $service->profile = $stmt->fetchAll(PDO::FETCH_BOTH);

    // $service->id2 =  $data['userID'];
    $service->nameTag = 'profile.php';
    $service->render('layouts/group11/employee.php');

});

$klein->respond('GET', '/staff/employee/editprofile', function($request, $response, $service, $app, $validator){
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //check login
  $data = $app->login->LoginThenGoTo('employee','/emp/staff');

  // connect db
  global $database;
  $conn = $database->getConnection();

 //select db
  // $service->$id = $data['userID'];
  $id = $data['userID'];
  $profileName = "SELECT * FROM G11_Emp_staff WHERE userID = $id " ;
  $stmt = $conn->prepare($profileName);
  $stmt->execute();
  $service->profile = $stmt->fetchAll(PDO::FETCH_BOTH);

    // $service->id2 =  $data['userID'];
    $service->nameTag = 'editprofile.php';
    $service->render('layouts/group11/employee.php');
});

$klein->respond('POST', 'staff/employee/add', function($request, $response, $service, $app, $validator){
  if($request->password != $request->confirmpassword) {
    // redirect
  }
  $role = 'employee';
  $app->login->register($username, $password, $email, $validateLink, $role);
});

$klein->respond('GET', '/staff/employee/finance', function($request, $response, $service, $app, $validator) {

      $service->nameTag = 'finance.php';
      //test
      global $database;
      $conn = $database->getConnection();

      $revenue = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Revenue")->fetchAll(PDO::FETCH_BOTH);
      $service->revenue = $revenue;

      $revenueList = $conn->query("SELECT addDate, amount  FROM G03_FIN_Revenue")->fetchAll(PDO::FETCH_BOTH);
      $service->revenue = $revenueList;

      $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses")->fetchAll(PDO::FETCH_BOTH);
      $service->expenses = $expenses;

      $expensesList = $conn->query("SELECT addDate, amount FROM G03_FIN_Expenses")->fetchAll(PDO::FETCH_BOTH);
      $service->expenses = $expensesList;

      $request;
      $service->render('layouts/group11/employee.php');

});

$klein->respond('GET', '/staff/employee/revenue', function($request, $response, $service, $app, $validator) {
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

        // $revenueGrahp = $conn->query("  SELECT  sum(amount)
        //                                 FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
        //                                 WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
        //                                 GROUP BY year(addDate),month(addDate)
        //                               ")->fetch(PDO::FETCH_ASSOC);

        // $revenueDate = $conn->query("   SELECT  month(addDate) as month , '|' ,year(addDate) as year
        //                                 FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
        //                                 WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
        //                                 GROUP BY year(addDate),month(addDate)
        //                               ")->fetch(PDO::FETCH_ASSOC);
        $service->revenueUU = $conn->query('select year, month, sum(amount) "total" 
                                            from (select * 
                                                  from G03_FIN_Revenue a 
                                                  join 
                                                  (select transactionID "tran", month(addDate) "month", year(addDate) "year"
                                                  from G03_FIN_Revenue) b on a.transactionID = b.tran) a
                                            group by month, year
                                            order by year, month asc;')->fetchAll(PDO::FETCH_ASSOC);
        
        
        // $response->dump($service->revenueUU);
        // $response->sendBody();


        $revenueList = $conn->query(" SELECT transactionId, dName, addDate, e.FirstName as empFN, e.LastName as empLN, m.Fname as memFN, m.Lname as memLN, amount
                                      FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                      WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID")->fetchAll(PDO::FETCH_BOTH);

    $service->pageTitle = 'Financial';
    $service->revenueList = $revenueList;
    $service->render('layouts/group11/employee.php');
    // echo($service->nameTag);
});

// Revenue  with DATE
/*$klein->respond('POST', '/staff/employee/revenue', function($request, $response, $service, $app, $validator) {
    // connect db
    global $database;
    $conn = $database->getConnection();
    $service->nameTag = 'revenue.php';
    //select table
    $startDate = '2016-03-24';
    $endDate = '2018-03-24';
    $list = $conn->query("SELECT dName , sum(amount) as total FROM G03_FIN_ID as FinancialID, G03_FIN_Revenue as Revenue
                          WHERE Revenue.FinID = FinancialID.id AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
                          GROUP BY dName")
                          ->fetchAll(PDO::FETCH_BOTH);

    $service->list = $list;

        $revenueGrahp = $conn->query("  SELECT  sum(amount)
                                        FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
                                        AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
                                        GROUP BY year(addDate),month(addDate)
                                      ")->fetch(PDO::FETCH_ASSOC);

        $revenueDate = $conn->query("   SELECT  month(addDate) as month , '|' ,year(addDate) as year
                                        FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID
                                        AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
                                        GROUP BY year(addDate),month(addDate)
                                      ")->fetch(PDO::FETCH_ASSOC);


        $revenueList = $conn->query(" SELECT transactionId, dName, addDate, e.FirstName as empFN, e.LastName as empLN, m.Fname as memFN, m.Lname as memLN, amount
                                      FROM G03_FIN_Revenue as Revenue, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                      AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
                                      WHERE Revenue.FinID = FinancialID.ID AND  Revenue.empID = e.Emp_ID AND Revenue.customerID = m.MemberID")->fetchAll(PDO::FETCH_BOTH);

    $service->pageTitle = 'Financial';
    $service->revenueList = $revenueList;
    $service->render('layouts/group11/employee.php');
    // echo($service->nameTag);
});*/

$klein->respond('GET', '/staff/employee/expense', function($request, $response, $service, $app, $validator) {

    $service->nameTag = 'expense.php';
    // connect db
      global $database;
      $conn = $database->getConnection();
      $service->nameTag = 'expense.php';
      //select table
      $list = $conn->query("SELECT dName , sum(amount) as total
                            FROM G03_FIN_ID as FinancialID, G03_FIN_Expenses as Expenses
                            WHERE Expenses.FinID = FinancialID.id
                            GROUP BY dName")
                            ->fetchAll(PDO::FETCH_BOTH);
      $service->list = $list;

          $expensesList = $conn->query(" SELECT transactionId, dName, addDate, e.FirstName as empFN, e.LastName as empLN, m.FName as memFN, m.LName as memLN, amount
                                        FROM G03_FIN_Expenses as Expenses, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Expenses.FinID = FinancialID.ID AND Expenses.empID = e.Emp_id AND Expenses.customerID = m.MemberID")->fetchAll(PDO::FETCH_BOTH);
          $service->pageTitle = 'Expense';
          $service->expensesList = $expensesList;
          // echo($service->nameTag);
          $service->expenseUU = $conn->query('select year, month, sum(amount) "total" 
                                            from (select *
                                                  from G03_FIN_Expenses a 
                                                  join 
                                                  (select transactionID "tran", month(addDate) "month", year(addDate) "year"
                                                  from G03_FIN_Expenses) b on a.transactionID = b.tran) a
                                            group by month, year
                                            order by year, month asc;')->fetchAll(PDO::FETCH_ASSOC);
         $service->render('layouts/group11/employee.php');
        // echo($service->nameTag);
    });

//expense With Date

/*$klein->respond('POST', '/staff/employee/expense', function($request, $response, $service, $app, $validator) {

    $service->nameTag = 'expense.php';
    // connect db
      global $database;
      $conn = $database->getConnection();
      $service->nameTag = 'expense.php';

      $startDate = '2016-03-24';
      $endDate = '2018-03-24';
      //select table
      $list = $conn->query("SELECT dName , sum(amount) as total
                            FROM G03_FIN_ID as FinancialID, G03_FIN_Expenses as Expenses
                            WHERE Expenses.FinID = FinancialID.id AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
                            GROUP BY dName")
                            ->fetchAll(PDO::FETCH_BOTH);
      $service->list = $list;

          $expensesList = $conn->query(" SELECT transactionId, dName, addDate, e.FirstName as empFN, e.LastName as empLN, m.FName as memFN, m.LName as memLN, amount
                                        FROM G03_FIN_Expenses as Expenses, G03_FIN_ID as FinancialID, G05_Member_profile as m, G11_Emp_staff as e
                                        WHERE Expenses.FinID = FinancialID.ID AND Expenses.empID = e.Emp_id AND Expenses.customerID = m.MemberID
                                        AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetchAll(PDO::FETCH_BOTH);
          $service->pageTitle = 'Expense';
          $service->expensesList = $expensesList;
          // echo($service->nameTag);
         $service->render('layouts/group11/employee.php');
        // echo($service->nameTag);
    });*/

$klein->respond('GET', '/staff/employee/statistics', function($request, $response, $service, $app, $validator) {
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

});

// stat with date
// $klein->respond('POST', '/staff/employee/statistics', function($request, $response, $service, $app, $validator) {
//   // connect db
//     global $database;
//     $conn = $database->getConnection();
//     $service->nameTag = 'statistics.php';
//
//
//         // // NO movie table in the new DB yet..
//         // $gene = $conn->query("SELECT Gene, COUNT(*)
//         //                       FROM G02_Ticket_history as ticket, movies
//         //                       WHERE ticket.movie_id = movies.ID
//         //                       GROUP BY  Gene")->fetchAll(PDO::FETCH_BOTH);
//         // $service->gene = $gene;
//
//         $startDate = '2016-03-24';
//         $endDate = '2018-03-24';
//
//         $productName = $conn->query("SELECT productName, COUNT(*)
//                                      FROM G13_FNB_detail as detail_fnb, G13_FNB_ProductList as productList_fnb
//                                      WHERE productList_fnb.ProductID  = detail_fnb.ProductID AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'
//                                      GROUP BY  detail_fnb.ProductID, productName ")->fetchAll(PDO::FETCH_BOTH);
//         $service->productName = $productName;
//
//         $morning= $conn->query("SELECT Count(*) as morning
//                                 from G04_MSRnB_showingroom
//                                 where hour(startTime) >= 8 AND hour(startTime) <= 12 AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetchAll(PDO::FETCH_BOTH);
//         $service->morning = $morning;
//
//         $afternoon = $conn->query("SELECT COUNT(*) as afternoon
//                                    from G04_MSRnB_showingroom
//                                    where hour(startTime) >= 13 AND hour(startTime) <= 17 AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetchAll(PDO::FETCH_BOTH);
//         $service->afternoon = $afternoon;
//
//         $evening = $conn->query("SELECT COUNT(*) as evening
//                                  from G04_MSRnB_showingroom
//                                  where hour(startTime) >= 18 AND hour(startTime) <= 20 AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetchAll(PDO::FETCH_BOTH);
//         $service->evening = $evening;
//
//         $midnight = $conn->query("SELECT COUNT(*) as midnight
//                                   from G04_MSRnB_showingroom
//                                   where hour(startTime) >= 21 AND hour(startTime) <= 6 AND addDate >= '".$startDate."' AND addDate <= '".$endDate."'")->fetchAll(PDO::FETCH_BOTH);
//         $service->midnight = $midnight;
//
//     $service->render('layouts/group11/employee.php');
//
// });

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
