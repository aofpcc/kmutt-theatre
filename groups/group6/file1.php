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

$klein->respond('GET', '/group6/checkUniqness', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  $user = $_GET['user'];
  $phoneno = $_GET['phoneno'];

  $query = "SELECT ID from Membership where Username = '$user' or PhoneNumber = '$phoneno'";
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

  $query = "SELECT * from Membership where ID = '$id'";
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
