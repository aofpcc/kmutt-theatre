<?php
$klein->respond('GET', '/androidGetPoint', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $memberID = $_GET['memberID'];

  $query = "SELECT * from G05_totalpoint where MemberID = '$memberID'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/androidForgetPassword', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $email = $_GET['email'];

  $result = $app->login->forgetPassword($email);

  echo json_encode([$result]);
});

$klein->respond('GET', '/androidChangePassword', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $userID = $_GET['userID'];  $oldPass = $_GET['oldpass'];  $newPass = $_GET['newpass'];

  $query = "SELECT * from core_user_pwd WHERE (password = '$oldPass' and userID = '$userID')";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();

  $arr = array();
  if($num == 1){
    $query = "INSERT INTO core_password_table (userID, password, create_date)
                            VALUES ('$userID', '$newPass', NOW());";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $arr["done"] = true;
    $arr["note"] = "Password have been changed";
  }else{
    $arr["done"] = false;
    $arr["note"] = "Invalid password";
  }


  echo json_encode([$arr]);
});

$klein->respond('GET', '/androidUpdate', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $userID = $_GET['userID'];  $pass = $_GET['pass'];  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];  $gender = $_GET['gender'];  $birthdate = $_GET['birthdate'];
  $phoneno = $_GET['phonenumber'];  $address = $_GET['address'];
  $district = $_GET['district'];  $province = $_GET['province'];  $postcode = $_GET['postcode'];
  $subdist = $_GET['subdist'];

  //Initialize array for return values
  $arr = array();

  //Check if anything changed
  $query = "SELECT * from G05_Member_profile A, G05_Member_address B where A.MemberID = '$userID' and A.Fname = '$firstname' and A.Lname = '$lastname' and A.Gender = '$gender' and A.Birthdate = '$birthdate' and A.PhoneNumber = '$phoneno'
            and B.Address = '$address' and B.Province = '$province' and B.District = '$district' and B.SubDistrict = '$subdist' and B.ZipCode = '$postcode' and B.MemberID = '$userID'";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num1 = $stmt->rowCount();

  //Confirm Password
  $query = "SELECT * from core_user_pwd where userID = '$userID' and password = '$pass'";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num2 = $stmt->rowCount();

  //Check uniqeness
  $query = "SELECT PhoneNumber from G05_Member_profile where PhoneNumber = '$phoneno' and MemberID <> '$userID'";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num3 = $stmt->rowCount();

  if($num1 == 0){
    if($num2 == 1){
      if($num3 == 0){
            //$query = "INSERT INTO G05_Member_profile (MemberID, ID_Card, Fname, Lname, Gender, Birthdate, Email, PhoneNumber)
                              //      VALUES ('$userID', '$identNo', '$firstname', '$lastname', '$gender', '$birthdate', '$email', '$phoneno')";
            $query = "UPDATE G05_Member_profile SET Fname = '$firstname', Lname = '$lastname', Gender = '$gender', Birthdate = '$birthdate', PhoneNumber = '$phoneno' WHERE MemberID = '$userID'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $query = "UPDATE G05_Member_address SET Address = '$address', Province = '$province', District = '$district', SubDistrict = '$subdist', ZipCode = '$postcode' WHERE MemberID = '$userID'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $arr["done"] = true;
            $arr["note"] = "Profile update succesfully";
      }else{
          $arr["done"] = false;
          $arr["note"] = "Phone number already exist";
      }
    }else{
      $arr["done"] = false;
      $arr["note"] = "Invalid Password";
    }
  }else{
    $arr["done"] = false;
    $arr["note"] = "Nothing have been changed";
  }
  echo json_encode([$arr]);
});

$klein->respond('GET', '/androidGetInfo', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $id = $_GET['id'];

  $query = "SELECT * FROM core_user_pwd A, G05_Member_profile B, G05_Member_address C WHERE A.userID = '$id' AND B.MemberID = '$id' AND C.MemberID = '$id'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/androidRegist', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $user = $_GET['user'];  $pass = $_GET['pass'];  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];  $gender = $_GET['gender'];  $birthdate = $_GET['birthdate'];
  $email = $_GET['email'];  $phoneno = $_GET['phonenumber'];  $address = $_GET['address'];
  $district = $_GET['district'];  $province = $_GET['province'];  $postcode = $_GET['postcode'];
  $identNo = $_GET['idcard']; $subdist = $_GET['subdist'];

  //Initialize array for return values
  $arr = array();

  //Check uniqeness
  $query = "SELECT ID_Card, Email, PhoneNumber from G05_Member_profile where ID_Card = '$identNo' or Email = '$email' or PhoneNumber = '$phoneno'";
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $num = $stmt->rowCount();
  if($num == 0){
    $validateLink = "/test/verify"; // neeed to have / before  and no / at the end
    $role = 'customer';
    $result = $app->login->register($user, $pass, $email, $validateLink, $role);

    if ($result['created']) {
        $userID = $result["userID"];
        $query = "INSERT INTO G05_Member_profile (MemberID, ID_Card, Fname, Lname, Gender, Birthdate, Email, PhoneNumber)
                                VALUES ('$userID', '$identNo', '$firstname', '$lastname', '$gender', '$birthdate', '$email', '$phoneno')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        //$memberID = $conn->lastInsertId();
        $query = "INSERT INTO G05_Member_address (MemberID, Address, Province, District, SubDistrict, ZipCode)
                                VALUES ('$userID','$address', '$province', '$district', '$subdist', '$postcode')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        //******* POINT *****************************************************
        $type = "Ticket";
        $query = "INSERT INTO G05_Member_Point_Transaction (MemberID, Date, Type)
                                VALUES ('$userID', NOW(), '$type')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $type = "FNB";
        $query = "INSERT INTO G05_Member_Point_Transaction (MemberID, Date, Type)
                                VALUES ('$userID', NOW(), 'FNB')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        //***** POINT ******************************************************

        $arr["done"] = true;
        $arr["note"] = "Account have been created succesfully";
        $arr["userID"] = $result["userID"];

    } else {
      $arr["done"] = false;
      $arr["note"] = $result["data"];
      $arr["userID"] = -1;
    }

  }
  if($num != 0){
      $arr["done"] = false;
      $arr["note"] = "Identification number, phone number, or email already exist.";
      $arr["userID"] = -1;
  }

  echo json_encode([$arr]);
});

$klein->respond('GET', '/androidLogin', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $username = $_GET['user'];
  $password = $_GET['pass'];
  //$password = $app->login->md5($password);

  $query = "SELECT userID from core_user_pwd WHERE (password = '$password' and (username = '$username' OR email = '$username'))";
  //$query = "SELECT A.userID, B.MemberID from core_user_pwd A, G05_Member_profile B WHERE (A.password = '$password' and (A.username = '$username' OR A.email = '$username')) and B.userID = (
	//           SELECT userID from core_user_pwd WHERE (password = '$password' and (username = '$username' OR email = '$username')) )";
  $stmt = $conn->prepare($query);
  $stmt->execute();


  $num = $stmt->rowCount();

  if($num == 1){
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
  }else{
    $arr[] = array("userID" => -1,);
  }

  echo json_encode($arr);
});
