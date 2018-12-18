<?php
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
?>