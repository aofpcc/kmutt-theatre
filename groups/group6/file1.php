<?php
$klein->respond('GET', '/group6', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT * from G05_Member_profile";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/group6/loginn', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $user = $_GET['user'];
  $password = $_GET['pass'];

  //$query = "SELECT userID from core_user_pwd where username = '$user' and password = '$password' ";
  $query = "SELECT MemberID from G05_Member_profile where Email = '$user' and PhoneNumber = '$password' ";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/group6/regis', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $user = $_GET['user'];  $pass = $_GET['pass'];  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];  $gender = $_GET['gender'];  $birthdate = $_GET['birthdate'];
  $email = $_GET['email'];  $phonenumber = $_GET['phonenumber'];  $address = $_GET['address'];
  $district = $_GET['district'];  $province = $_GET['province'];  $postcode = $_GET['postcode'];

  $query = "INSERT INTO Membership (Username, Password, FirstName,LastName,Gender,Birthdate,Email,PhoneNumber,Address,District,Province,Postcode)
                          VALUES ('$user', '$pass', '$firstname', '$lastname', '$gender', '$birthdate', '$email', '$phonenumber', '$address', '$district', '$province', '$postcode')";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode([$query]);
});

$klein->respond('GET', '/group6/update', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $id = $_GET['id'];
  $pass = $_GET['pass'];  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];  $gender = $_GET['gender'];  $birthdate = $_GET['birthdate'];
  $email = $_GET['email'];  $phonenumber = $_GET['phonenumber'];  $address = $_GET['address'];
  $district = $_GET['district'];  $province = $_GET['province'];  $postcode = $_GET['postcode'];


  $query = "UPDATE Membership SET Password='$pass', FirstName='$firstname', LastName='$lastname', Gender='$gender', Birthdate='$birthdate', Email='$email', PhoneNumber='$phonenumber', Address='$address', District='$district', Province='$province', Postcode='$postcode' WHERE ID=$id";

  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode([$query]);
});

$klein->respond('GET', '/group6/setMoney', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $id = $_GET['id'];
  $money = $_GET['money'];

  $query = "UPDATE Membership SET Money=$money WHERE ID = $id";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode([$query]);
});

$klein->respond('GET', '/androidCheckUniqness', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $idCard = $_GET['idcard'];
  $email = $_GET['email'];
  $phoneno = $_GET['phoneno'];

  $query = "SELECT ID_Card, Email, PhoneNumber from G05_Member_profile where ID_Card = '$idCard' or Email = '$email' or PhoneNumber = '$phoneno'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/group6/getInfo', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $id = $_GET['id'];

  $query = "SELECT * from G05_Member_profile where MemberID = '$id'";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  $num = $stmt->rowCount();
  $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  echo json_encode($arr);
});

$klein->respond('GET', '/group6/max', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $query = "SELECT ID from Membership";
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
    $userID = $result["userID"];
    if ($result['created']) {
        $query = "INSERT INTO G05_Member_profile (MemberID, ID_Card, Fname, Lname, Gender, Birthdate, Email, PhoneNumber)
                                VALUES ('$userID','$identNo', '$firstname', '$lastname', '$gender', '$birthdate', '$email', '$phoneno')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $query = "INSERT INTO G05_Member_address (MemberID, Address, Province, District, SubDistrict, ZipCode)
                                VALUES ('$userID','$address', '$province', '$district', '$subdist', '$postcode')";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $arr["done"] = true;
        $arr["note"] = "Account have been created succesfully";
        $arr["userID"] = $result["userID"];

    } else {
      $arr["done"] = false;
      $arr["note"] = $result["data"];
    }

  }else{
      $arr["done"] = false;
      $arr["note"] = "Identification number, phone number, or email already exist.";
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
  //$query = "SELECT * from core_user_pwd WHERE password = '$password' and username = '$username'";
  $stmt = $conn->prepare($query);
  $stmt->execute();


  $num = $stmt->rowCount();

  if($num == 1){
    $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
  }else{
    $arr = array("userID" => -1);
  }

  echo json_encode($arr);
});
