<?php

//timestamp
$klein->respond('POST', '/staff/employee/worktime', function($request, $response, $service, $app, $validator){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
    $data = $app->login->LoginThenGoTo('employee','/emp/staff');
  
    // connect db
    global $database;
    $conn = $database->getConnection();

    date_default_timezone_set("Asia/Bangkok");

    $id = $data['userID'];

    $now = new DateTime("NOW");

    $checkDate = "SELECT * FROM G11_Emp_timeStamp WHERE userID=$request->uid AND workDate=CURRENT_DATE";
    $stmt = $conn->prepare($checkDate);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->res = count($res);

    if(empty($res)) {
      $checkUser = "INSERT INTO G11_Emp_timeStamp (userID , timeIn , timeOut , workDate ) 
       VALUES ('$request->uid',CURRENT_TIMESTAMP,NULL,CURRENT_TIMESTAMP)";
      $stmt = $conn->prepare($checkUser);
      $stmt->execute();
    } else {
      for($i=0; $i < count($res); $i++) {
        $d = $now->format("Y-m-d");
        if($now->format("Y-m-d") === $res[$i]['workDate'] && $res[$i]['timeOut'] === NULL && intval($now->format("H")) >= 20 ) {
          $date = "UPDATE G11_Emp_timeStamp SET 
          timeOut=CURRENT_TIMESTAMP  
          WHERE userID = $request->uid ORDER BY timeIn DESC limit 1";
          $stmt = $conn->prepare($date);
          $stmt->execute();
        }
      }
    }
      
    $service->uid = $id;
    $service->nameTag = 'worktime.php';
    $service->render('layouts/group11/employee.php');
  });

  $klein->respond('GET', '/staff/employee/worktime', function($request, $response, $service, $app, $validator){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
    $data = $app->login->LoginThenGoTo('employee','/emp/staff');

  
    // connect db
    global $database;
    $conn = $database->getConnection();

    date_default_timezone_set("Asia/Bangkok");

    $id = $data['userID'];
    $checkUser = "SELECT * FROM G11_Emp_staff WHERE userID = $id";
    $stmt = $conn->prepare($checkUser);
    $stmt->execute();
    $checkper = $stmt->fetchAll(PDO::FETCH_BOTH);

    $check = $checkper[0]['Status'];

    $per = "SELECT * FROM G11_Emp_permission WHERE `status` = '$check' ";
    $stmt = $conn->prepare($per);
    $stmt->execute();
    $permission = $stmt->fetchAll(PDO::FETCH_BOTH);

    

    
    if($permission[0]['worktime'] == 1){
    $service->nameTag = 'worktime.php';
    $service->render('layouts/group11/employee.php');
    }else{
        $response->redirect('/emp/staff/employee/dashboard');
    }
  });

  $klein->respond('GET', '/staff/employee/timestamp', function($request, $response, $service, $app, $validator){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
    $data = $app->login->LoginThenGoTo('employee','/emp/staff');
  
    // connect db
    global $database;
    $conn = $database->getConnection();

    date_default_timezone_set("Asia/Bangkok");

    $id = $data['userID'];
    
    $checkUser = "SELECT * FROM G11_Emp_timeStamp";
    $stmt = $conn->prepare($checkUser);
    $stmt->execute();
    $service->countUser = $stmt->fetchAll(PDO::FETCH_BOTH);

    $user = "SELECT * FROM G11_Emp_staff";
    $stmt = $conn->prepare($user);
    $stmt->execute();
    $service->user = $stmt->fetchAll(PDO::FETCH_BOTH);

    $now = new DateTime("now");
    $service->monthNow = $now->format("Y-m");

    $service->nameTag = 'timestamp.php';
    $service->render('layouts/group11/employee.php');
  });

  $klein->respond('POST', '/staff/employee/timestamp', function($request, $response, $service, $app, $validator){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
    $data = $app->login->LoginThenGoTo('employee','/emp/staff');
  
    // connect db
    global $database;
    $conn = $database->getConnection();

    date_default_timezone_set("Asia/Bangkok");

    $id = $data['userID'];
    
    $checkUser = "SELECT * FROM G11_Emp_timeStamp WHERE userID = $request->id";
    $stmt = $conn->prepare($checkUser);
    $stmt->execute();
    $service->countUser = $stmt->fetchAll(PDO::FETCH_BOTH);

    $service->monthNow = $request->month;

    $service->nameTag = 'timestamp.php';
    $service->render('layouts/group11/employee.php');
  });
  //timestamp

$klein->respond('GET', '/staff/employee/editemp/[:userID]', function ($request, $response, $service, $app, $validator) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $service->bootstrap3 = true;
  //check login
   $data = $app->login->LoginThenGoTo('employee','/emp/staff');
  //  echo($data['userID']);

   // connect db
   global $database;
   $conn = $database->getConnection();
   $id = $data['userID'];

  //select G11_Emp_staff
    $query = "SELECT * from G11_Emp_staff WHERE userID = $request->userID" ;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);

    //select G11_Emp_department
    $dep = "SELECT * from G11_Emp_department WHERE userID = $request->userID" ;
    $stmt = $conn->prepare($dep);
    $stmt->execute();
    $service->department = $stmt->fetchAll(PDO::FETCH_BOTH);

     //select db core_user_table
     $user = "SELECT * FROM core_user_table WHERE userID = $request->userID " ;
     $stmt = $conn->prepare($user);
     $stmt->execute();
     $service->userName = $stmt->fetchAll(PDO::FETCH_BOTH);

     //select db G11_Emp_status
     $status = "SELECT * FROM G11_Emp_status"  ;
     $stmt = $conn->prepare($status);
     $stmt->execute();
     $service->showstatus = $stmt->fetchAll(PDO::FETCH_BOTH);
  
    //check
    $checks = "SELECT * from G11_Emp_staff where userID = $id" ;
    $stmt = $conn->prepare($checks);
    $stmt->execute();
    $service->state = $stmt->fetchAll(PDO::FETCH_BOTH);
    $status = $service->state[0]['Status'];

     //select G11_Emp_permission
    $checkstatus = "SELECT * from G11_Emp_permission where `status` = '$status'" ;
    $stmt = $conn->prepare($checkstatus);
    $stmt->execute();
    $service->permission = $stmt->fetchAll(PDO::FETCH_BOTH);

    $bran = "SELECT * FROM G14_Branch" ;
    $stmt = $conn->prepare($bran);
    $stmt->execute();
    $service->branch = $stmt->fetchAll(PDO::FETCH_BOTH);
    
  $service->nameTag = 'editemployee.php';
  $service->render('layouts/group11/employee.php');

});

$klein->respond('POST', '/staff/employee/editemp/save', function ($request, $response, $service, $app, $validator) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
     $data = $app->login->LoginThenGoTo('employee','/emp/staff');
    //  echo($data['userID']);
  
     // connect db
     global $database;
     $conn = $database->getConnection();
     $id = $data['userID'];
  
   //select G11_Emp_staff
   $query = "SELECT * from G11_Emp_staff WHERE userID = $request->userID" ;
   $stmt = $conn->prepare($query);
   $stmt->execute();
   $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);

   $bran = "SELECT * FROM G14_Branch" ;
   $stmt = $conn->prepare($bran);
   $stmt->execute();
   $service->branch = $stmt->fetchAll(PDO::FETCH_BOTH);

   //history
   $firstname =  $service->employee[0]['Firstname'];
   $lastname = $service->employee[0]['Lastname'];
   $tell = $service->employee[0]['Tell'];
   $email = $service->employee[0]['Email'];
   $sex = $service->employee[0]['Sex'];
   $status = $service->employee[0]['Status'];
   $address = $service->employee[0]['Address'];
   $salary = $service->employee[0]['Salary'];
   $super_emp= $service->employee[0]['Super_emp'];
   // $userID= $service->profile[0]['userID'];


    //insert db G11_Emp_history_staff
  $historyEmp = "INSERT INTO G11_Emp_history_staff (Firstname, Lastname, Sex, `Status` , Email, `Address`, Salary, Super_emp, Tell, userID) 
               VALUES ('$firstname','$lastname','$sex','$status','$email','$address','$salary','$super_emp','$tell','$request->userID')";
  $stmt = $conn->prepare($historyEmp);
  $stmt->execute();

  
    //select G11_Emp_department
    $dep = "SELECT * from G11_Emp_department WHERE userID = $request->userID" ;
    $stmt = $conn->prepare($dep);
    $stmt->execute();
    $service->department = $stmt->fetchAll(PDO::FETCH_BOTH);

    $experience = $service->department[0]['experience'];
    $Profession = $service->department[0]['Profession'];
    $ot_rate = $service->department[0]['ot_rate'];
    $eng_lv = $service->department[0]['eng_lv'];
    $availability = $service->department[0]['availability'];
    $branch = $service->department[0]['branchID'];

     //insert db G11_Emp_history_dep
     $historydep = "INSERT INTO G11_Emp_history_dep (userID, experience, Profession, ot_rate , eng_lv, `availability`, branchID) 
                                    VALUES ('$request->userID', '$experience', '$Profession', '$ot_rate', ' $eng_lv', '$availability','$branch')";
    $stmt = $conn->prepare($historydep);
    $stmt->execute();

  $experience = $request->experience;
  $Profession = $request->Profession;
  $ot_rate = $request->ot_rate;
  $eng_lv = $request->eng_lv;
  $availability = $request->availability;
  $branch = $request->branch;

    //select db core_user_table
    $user = "SELECT * FROM core_user_table WHERE userID = $request->userID " ;
    $stmt = $conn->prepare($user);
    $stmt->execute();
    $service->userName = $stmt->fetchAll(PDO::FETCH_BOTH);

    //select db G11_Emp_status
    $status = "SELECT * FROM G11_Emp_status"  ;
    $stmt = $conn->prepare($status);
    $stmt->execute();
    $service->showstatus = $stmt->fetchAll(PDO::FETCH_BOTH);
 
    
      //check
      $checks = "SELECT * from G11_Emp_staff where userID = $id" ;
      $stmt = $conn->prepare($checks);
      $stmt->execute();
      $service->state = $stmt->fetchAll(PDO::FETCH_BOTH);
      $status = $service->state[0]['Status'];
  
       //select G11_Emp_permission
      $checkstatus = "SELECT * from G11_Emp_permission where `status` = '$status'" ;
      $stmt = $conn->prepare($checkstatus);
      $stmt->execute();
      $service->permission = $stmt->fetchAll(PDO::FETCH_BOTH);
  
     //checkpass
    //  if($request->password != $request->confirmpassword) {
    //     //select db G11_Emp_status
    //    $status = "SELECT * FROM G11_Emp_status"  ;
    //    $stmt = $conn->prepare($status);
    //    $stmt->execute();
    //    $service->showstatus = $stmt->fetchAll(PDO::FETCH_BOTH);
 
    //    $service->error = 'password is not same as confirm password.';
    //    $service->nameTag = 'editemployee.php';
    //    $service->render('layouts/group11/employee.php');
    //  }
    
     $username = $request->Username;
    //  $password = $request->password;
     $email = $request->Email;
     $validateLink = 0;
    //  $role = 'employee';
     //create user
    //  $app->login->register($username, $password, $email, $validateLink, $role);
 
      //select db core_user_table
    //   $userID = "SELECT userID FROM core_user_table WHERE username = '$username' AND email = '$email' "  ;
    //   $stmt = $conn->prepare($userID);
    //   $stmt->execute();
    //   $user = $stmt->fetchAll(PDO::FETCH_BOTH);
 
      $firstName = $request->firstName;
      $lastName = $request->lastName;
      $gender = $request->gender;
      $Status = $request->Status;
      $address = $request->address;
      $Salary = $request->Salary;
      $Super_emp = 5;
      $Tell = $request->Tell;
      $users = $request->userID;
 
      $experience = $request->experience;
      $Profession = $request->Profession;
      $ot_rate = $request->ot_rate;
      $eng_lv = $request->eng_lv;
      $availability = $request->availability;
      $branch = $request->branch;
     
       //update db G11_Emp_staff
      $newprofile = "UPDATE G11_Emp_staff SET Firstname = '$firstName', Lastname = '$lastName', Sex = '$gender',
                                            `Status` = '$Status' , Email = '$email', `Address` = '$address', Salary = '$Salary', Super_emp = '$Super_emp', Tell = '$Tell'
                                            WHERE userID = $users";
      $stmt = $conn->prepare($newprofile);
      $stmt->execute();
 
        //update db G11_Emp_department
        $newdepart = "UPDATE G11_Emp_department SET experience = '$experience', Profession = '$Profession', ot_rate = '$ot_rate' , eng_lv = '$eng_lv', `availability` = '$availability', branchID = '$branch'
                                            WHERE userID = $users";
      $stmt = $conn->prepare($newdepart);
      $stmt->execute();

      //update db core_user_table
      $newprofile = "UPDATE core_user_table SET username = '$username', email = '$email' WHERE userID = $users";
      $stmt = $conn->prepare($newprofile);
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
         //update db G11_Emp_picture
         $updatePicture = "UPDATE G11_Emp_picture SET parth = '$target_file' WHERE userID = $users";
         $stmt = $conn->prepare($updatePicture);
         $stmt->execute();
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
   }
   
     $response->redirect('/emp/staff/employee/dashboard');
  });

  $klein->respond('POST', '/staff/employee/dashboard/search', function ($request, $response, $service, $app, $validator) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $service->bootstrap3 = true;
    //check login
     $data = $app->login->LoginThenGoTo('employee','/emp/staff');
    //  echo($data['userID']);
  
     // connect db
     global $database;
     $conn = $database->getConnection();
     
    $tell =  $request->tell;
    //select
    $query = "SELECT * from G11_Emp_staff WHERE Tell LIKE '%$tell%' OR `Status` LIKE '%$tell%' OR Firstname LIKE '%$tell%'  OR Lastname LIKE '%$tell%' OR Email LIKE '%$tell%' " ;
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $service->employee = $stmt->fetchAll(PDO::FETCH_BOTH);
      $id = $data['userID'];
  
      $checks = "SELECT * from G11_Emp_staff where userID = $id" ;
      $stmt = $conn->prepare($checks);
      $stmt->execute();
      $service->state = $stmt->fetchAll(PDO::FETCH_BOTH);
      $status = $service->state[0]['Status'];
  
       //select G11_Emp_permission
    $checkstatus = "SELECT * from G11_Emp_permission where `status` = '$status'" ;
    $stmt = $conn->prepare($checkstatus);
    $stmt->execute();
    $service->permission = $stmt->fetchAll(PDO::FETCH_BOTH);
  
  
    $service->nameTag = 'dashboard.php';
    $service->render('layouts/group11/employee.php');
  
  });
?>