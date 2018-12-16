<?php
// member information
$klein->respond('POST', '/membership', function ($request, $response, $service) {
    $response->redirect('/membership');
});

$klein->respond('GET', '/membership', function ($request, $response, $service) {
    $service->title = "Memeber Information";
    $service->bootstrap3 = false;

    global $database;
    $conn = $database->getConnection();

    // query1 Profile
    $sql = "SELECT  pf.MemberID, pw.Password, pf.PhoneNumber, pf.Email, pt.Total_Point,
            pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, ads.Address,
            ads.Province, ads.District, ads.SubDistrict, ads.ZipCode
            FROM G05_Member_profile as pf, G05_Member_password as pw, G05_Member_point as pt, G05_Member_address as ads
            WHERE pf.MemberID=pw.MemberID and pf.MemberID=pt.MemberID and pf.MemberID = ads.MemberID
            and pf.MemberID = 1";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // query2 Age
    $sql2 = "SELECT year(current_date)-year(pf.BirthDate) as age
           FROM G05_Member_profile as pf";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $age = $stmt->fetchAll();

    $service->usr = $data;
    $service->age = $age[0]["age"];
    $service->render('layouts/group5/membership.php');
});

$klein->respond('POST', '/change/phonenumber/action', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $PhoneNumber = $request->PhoneNumber;

    //Check Password
    // $query = "SELECT * from movies";
    // $stmt = $conn->prepare($query);
    // $stmt->execute();
    //
    // $num = $stmt->rowCount();

    // query3 Phone Number
    $sql3 = "UPDATE G05_Member_profile
           SET PhoneNumber='$PhoneNumber'
           WHERE MemberID='1'";
    $stmt = $conn->prepare($sql3);
    $stmt->execute();
    $response->redirect('/customer/membership');
});

$klein->respond('POST', '/change/email/action', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $Email = $request->Email;

    // query4 Email
    $sql4 = "UPDATE G05_Member_profile
           SET Email='$Email'
           WHERE MemberID='1'";
    $stmt = $conn->prepare($sql4);
    $stmt->execute();
    $response->redirect('/customer/membership');
});

// change password (page)
$klein->respond('GET', '/change/password', function ($request, $response, $service) {
    $service->render('layouts/group5/changePassword.php');
});

// change password (actual SQL)
$klein->respond('POST', '/change/password/action', function ($request, $response, $service) {
    $oldPassword = $request->oldPassword;
    $newPassword1 = $request->newPassword1;
    $newPassword2 = $request->newPassword2;

    if($newPassword1 != $newPassword2) {
      $service->flash("New Password has not matched.");
      $service->back();
    }

    global $database;
    $conn = $database->getConnection();
    $sql = "UPDATE G05_Member_password
          SET Password = newPassword1;
          WHERE ;";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    $service->usr = $data;
    $service->render('layouts/group5/membership.php');
});

// Change email
$klein->respond('GET', '/change/email', function ($request, $response, $service) {
    $service->render('layouts/group5/changeEmail.php');
});

// Change phone number
$klein->respond('GET', '/change/phonenumber', function ($request, $response, $service) {
    $service->render('layouts/group5/changePhoneNumber.php');
});

// member information
$klein->respond('GET', '/login', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/login.php');
});

// Drive-Register
$klein->respond('GET', '/register', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/register.php');
});
// armmm
$klein->respond('POST', '/editprofile/action', function ($request, $response, $service) {
    $fst = $request->Firstname;
    $lst = $request->Lastname;
    $adr = $request->Address;
    $Subdist = $request->Subdistrict;
    $dist = $request->District;
    $prov = $request->Province;
    $post = $request->Postcode;
    global $database;
    $conn = $database->getConnection();
    try{
      $conn->beginTransaction();
      $conn->exec("UPDATE G05_Member_profile
            SET Fname = '$fst', Lname = '$lst'
            WHERE MemberID = 1;");
          $conn->exec("UPDATE G05_Member_address
            SET Address = '$adr', Province = '$prov', District = '$dist',
            SubDistrict = '$Subdist', ZipCode = '$post'
            WHERE MemberID = 1;");
          $conn->commit();
    }
    catch(PDOException $e)
    {
      $conn->rollback();

    }

    //$service->usr = $data;
    // $service->render('layouts/group5/editprofile.php');
     $response->redirect('/customer/membership');
     //uncomment อันนี้ออก พาไปหน้าหญิงฤดี
    //$service->back();
});

$klein->respond('GET', '/editprofile', function ($request, $response, $service) {
  global $database;
  $conn = $database->getConnection();

  // query1 Profile
  $sql = "SELECT  pf.MemberID, pw.Password, pf.PhoneNumber, pf.Email, pt.Total_Point,
          pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, ads.Address,
          ads.Province, ads.District, ads.SubDistrict, ads.ZipCode
          FROM G05_Member_profile as pf, G05_Member_password as pw, G05_Member_point as pt, G05_Member_address as ads
          WHERE pf.MemberID=pw.MemberID and pf.MemberID=pt.MemberID and pf.MemberID = ads.MemberID
          and pf.MemberID = 1";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll();

  // query2 Age
  $sql2 = "SELECT year(current_date)-year(pf.BirthDate) as age
           FROM G05_Member_profile as pf";
  $stmt = $conn->prepare($sql2);
  $stmt->execute();
  $age = $stmt->fetchAll();



  $service->usr = $data;
  $service->age = $age[0]["age"];
  $service->render('layouts/group5/editprofile.php');


});

  $klein->respond('POST', '/kong/action', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    // $Firstname = $request->Firstname;
    // $Lastname = $request->Lastname
    // $Address = $request->Address;
    // $Subdistrict = $request->Subdistrict;
    // $District = $request->District;
    // $Province = $request->Province;
    // $Postcode = $request->Postcode;
    //
    // // query5 chynnakryt
    // $sql4 = "UPDATE G05_Member_profile
    //          SET Fname='$Firstname',
    //         Lname='$Lastname',
    //         -- ค่อยมาเพิ่ม address
    //          WHERE MemberID='1'";
    // $stmt = $conn->prepare($sql4);
    // $stmt->execute();
    $response->redirect('/customer/membership');
});
