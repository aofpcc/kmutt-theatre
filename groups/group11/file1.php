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

  //select db G11_Emp_picture
  $user = "SELECT * FROM G11_Emp_picture WHERE userID = $id " ;
  $stmt = $conn->prepare($user);
  $stmt->execute();
  $service->picture = $stmt->fetchAll(PDO::FETCH_BOTH);

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

 //select db G11_Emp_staff
  $id = $data['userID'];
  $profileName = "SELECT * FROM G11_Emp_staff WHERE userID = $id " ;
  $stmt = $conn->prepare($profileName);
  $stmt->execute();
  $service->profile = $stmt->fetchAll(PDO::FETCH_BOTH);

   //select db core_user_table
   $user = "SELECT username FROM core_user_table WHERE userID = $id " ;
   $stmt = $conn->prepare($user);
   $stmt->execute();
   $service->userName = $stmt->fetchAll(PDO::FETCH_BOTH);

  //select db G11_Emp_picture
  $user = "SELECT * FROM G11_Emp_picture WHERE userID = $id " ;
  $stmt = $conn->prepare($user);
  $stmt->execute();
  $service->picture = $stmt->fetchAll(PDO::FETCH_BOTH);


    $service->nameTag = 'editprofile.php';
    $service->render('layouts/group11/employee.php');
});

$klein->respond('POST', '/staff/employee/editprofile/save', function($request, $response, $service, $app, $validator){
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //check login
  $data = $app->login->LoginThenGoTo('employee','/emp/staff');

  // connect db
  global $database;
  $conn = $database->getConnection();

      //select db G11_Emp_staff
      $id = $data['userID'];
      $profileName = "SELECT * FROM G11_Emp_staff WHERE userID = $id " ;
      $stmt = $conn->prepare($profileName);
      $stmt->execute();
      $service->profile = $stmt->fetchAll(PDO::FETCH_BOTH);

     //select db core_user_table
      $user = "SELECT * FROM core_user_table WHERE userID = $id " ;
      $stmt = $conn->prepare($user);
      $stmt->execute();
      $service->userName = $stmt->fetchAll(PDO::FETCH_BOTH);

       //select db G11_Emp_picture
      $user = "SELECT * FROM G11_Emp_picture WHERE userID = $id " ;
      $stmt = $conn->prepare($user);
      $stmt->execute();
      $service->picture = $stmt->fetchAll(PDO::FETCH_BOTH);

  //password is not same as confirm password
  if($request->password != $request->confirmpassword) {

    $service->error = 'password is not same as confirm password.';
    $service->nameTag = 'editprofile.php';
    $service->render('layouts/group11/employee.php');

  }
  //check password incorect
  if($request->password == $request->confirmpassword){
    $check = md5($request->password);

    //select db core_password_table
    $pass = "SELECT `password` FROM core_password_table WHERE userID = $id " ;
    $stmt = $conn->prepare($pass);
    $stmt->execute();
    $passUser = $stmt->fetchAll(PDO::FETCH_BOTH);

    if($check != $passUser[0]['password']){

        $service->error = 'password incorrect.';
        $service->nameTag = 'editprofile.php';
        $service->render('layouts/group11/employee.php');
    }
  }


  //not null
  $firstname = $request->firstName;
  $lastname = $request->lastName;
  $email = $request->Email;
  $username = $request->Username;
  $file = $request->file;
  //check Email or username has already exists.
  if($email != $service->profile[0]['Email']){
  //select db G11_Emp_staff
    $checkemail = "SELECT * FROM G11_Emp_staff WHERE Email = '$email'" ;
    $stmt = $conn->prepare($checkemail);
    $stmt->execute();
    $countEmail = $stmt->fetchAll(PDO::FETCH_BOTH);

      if(count($countEmail) == 1){
          $service->error = 'Email has already exists.';
          $service->nameTag = 'editprofile.php';
          $service->render('layouts/group11/employee.php');
      }


      if(count($countEmail) == null){
      //update db G11_Emp_staff
      $updateProfile = "UPDATE G11_Emp_staff SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email' WHERE userID = $id";
      $stmt = $conn->prepare($updateProfile);
      $stmt->execute();

      //update db core_user_table
      $updateEmail = "UPDATE core_user_table SET email = '$email' WHERE userID = $id";
      $stmt = $conn->prepare($updateEmail);
      $stmt->execute();
    }
  }

  if($username !=  $service->userName[0]['username']){
      //select db core_user_table
      $checkUser = "SELECT * FROM core_user_table WHERE username = '$username'" ;
      $stmt = $conn->prepare($checkUser);
      $stmt->execute();
      $countUser = $stmt->fetchAll(PDO::FETCH_BOTH);

        if(count($countUser) == 1){
            $service->error = 'Username has already exists.';
            $service->nameTag = 'editprofile.php';
            $service->render('layouts/group11/employee.php');
        }


        if(count($countUser) == null){
        //update db G11_Emp_staff
        $updateProfile = "UPDATE G11_Emp_staff SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email' WHERE userID = $id";
        $stmt = $conn->prepare($updateProfile);
        $stmt->execute();

        //update db core_user_table
        $updateUser = "UPDATE core_user_table SET username = '$username' WHERE userID = $id";
        $stmt = $conn->prepare($updateUser);
        $stmt->execute();
      }
  }

  //update db G11_Emp_staff
  $updateProfile = "UPDATE G11_Emp_staff SET Firstname = '$firstname', Lastname = '$lastname' WHERE userID = $id";
  $stmt = $conn->prepare($updateProfile);
  $stmt->execute();

  //upload picture
  $fileName = md5(uniqid(rand(),true));
  $target_dir = "layouts/group11/uploads/";
  $target_file = $target_dir .$fileName. basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //update db G11_Emp_picture
        $updatePicture = "UPDATE G11_Emp_picture SET parth = '$target_file' WHERE userID = $id";
        $stmt = $conn->prepare($updatePicture);
        $stmt->execute();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }


    $response->redirect('/emp/staff/employee/profile');
  });

  $klein->respond('POST', '/staff/employee/editprofile/test', function($request, $response, $service, $app, $validator){
    // $target_dir = "/layouts/group11/uploads/";
  $fileName = md5(uniqid(rand(),true));
  $target_dir = "layouts/group11/uploads/";
  $target_file = $target_dir .$fileName. basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //update db G11_Emp_picture
        $updatePicture = "UPDATE G11_Emp_picture SET parth = '$target_file' WHERE userID = $id";
        $stmt = $conn->prepare($updatePicture);
        $stmt->execute();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }

  // $service->error =
    $service->nameTag = 'tester.php';
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
      $service->revenueList = $revenueList;

      $expenses = $conn->query("SELECT sum(amount) as total FROM G03_FIN_Expenses")->fetchAll(PDO::FETCH_BOTH);
      $service->expenses = $expenses;

      $expensesList = $conn->query("SELECT addDate, amount FROM G03_FIN_Expenses")->fetchAll(PDO::FETCH_BOTH);
      $service->expensesList = $expensesList;

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
         $gene = $conn->query(" SELECT gerne as label, COUNT(*) as amount
                                FROM G02_Ticket_history as ticket, G09_Movie as movies
                                WHERE ticket.movie_id = movies.ID
                                GROUP BY  gerne")->fetchAll(PDO::FETCH_BOTH);
         $service->gene = $gene;

        $productName = $conn->query("SELECT productName as label, COUNT(*) as amount
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

$klein->respond('GET', '/staff/kuy', function($request, $response, $service, $app, $validator) {
  $arr = [
    [
      "id" => 1,
      "name" => "kuy"
    ],
    [
      "id" => 2,
      "name" => "hee"
    ]
  ];

  $arr2= [];
  foreach($arr as $v) {
    $temp = [
      "master_id" => $v["id"],
      "master_name" => $v["name"]
    ];
    array_push($arr2, $temp);
  }
  return$response->json($arr2);
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
