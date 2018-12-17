<?php
// member information
$klein->respond(['GET', 'POST'], '/membership', function ($request, $response, $service, $app, $validator) {    
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    // connect db
    global $database;
    $conn = $database->getConnection();

    // query1 Profile
    // $sql = "SELECT  pf.MemberID, pw.Password, pf.PhoneNumber, pf.Email, pt.Total_Point,
    //         pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, ads.Address,
    //         ads.Province, ads.District, ads.SubDistrict, ads.ZipCode
    //         FROM G05_Member_profile as pf, G05_Member_password as pw, G05_Member_point as pt, G05_Member_address as ads
    //         WHERE pf.MemberID=pw.MemberID and pf.MemberID=pt.MemberID and pf.MemberID = ads.MemberID
    //         and pf.userID = $userID";
    
    $sql = "SELECT  pf.MemberID, pf.PhoneNumber, pf.Email, pt.Total_Point,
            pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, addr.Address,
            addr.Province, addr.District, addr.SubDistrict, addr.ZipCode
            FROM G05_Member_profile as pf
            LEFT JOIN G05_Member_point as pt ON pf.MemberID=pt.MemberID
            LEFT JOIN G05_Member_address as addr ON pf.MemberID = addr.MemberID
            WHERE pf.userID = $userID";
    // echo $sql;

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // query2 Age
    $sql2 = "SELECT year(current_date)-year(pf.BirthDate) as age
           FROM G05_Member_profile as pf";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $age = $stmt->fetchAll();

    // send some params and render the page
    $service->title = "Member Information";
    $service->bootstrap3 = false;
    $service->usr = $data;
    $service->age = $age[0]["age"];
    $service->render('layouts/group5/membership.php');
});

$klein->respond('POST', '/change/phonenumber/action', function ($request, $response, $service, $app, $validator) {    
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

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
           WHERE UserID = $userID";
    $stmt = $conn->prepare($sql3);
    $stmt->execute();
    $response->redirect('/customer/membership');
});

$klein->respond('POST', '/change/email/action', function ($request, $response, $service, $app, $validator) {    
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    global $database;
    $conn = $database->getConnection();
    $Email = $request->Email;

    // query4 Email
    $sql4 = "UPDATE G05_Member_profile
           SET Email='$Email'
           WHERE UserID = $userID";
    $stmt = $conn->prepare($sql4);
    $stmt->execute();
    $response->redirect('/customer/membership');
});

// change password (page)
$klein->respond('GET', '/change/password', function ($request, $response, $service, $app, $validator) {    
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    $service->render('layouts/group5/changePassword.php');
});

// change password (actual SQL)
$klein->respond('POST', '/change/password/action', function ($request, $response, $service, $app, $validator) {    
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

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
          SET Password = $newPassword1
          WHERE ;";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    $service->usr = $data;
    $service->render('layouts/group5/membership.php');
});

// Change email (page)
$klein->respond('GET', '/change/email', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    // connect db
    global $database;
    $conn = $database->getConnection();

    // get current phone no.
    $sql = "SELECT Email
            FROM G05_Member_profile
            WHERE userID = $userID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // render the page
    $service->currentEmail = $data[0]['Email'];
    $service->render('layouts/group5/changeEmail.php');
});

// Change phone number (page)
$klein->respond('GET', '/change/phonenumber', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];
    
    // connect db
    global $database;
    $conn = $database->getConnection();

    // get current phone no.
    $sql = "SELECT PhoneNumber
            FROM G05_Member_profile
            WHERE userID = $userID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // render the page
    $service->currentPhone = $data[0]['PhoneNumber'];
    $service->render('layouts/group5/changePhoneNumber.php');
});

// member information
$klein->respond('GET', '/login', function ($request, $response, $service, $app, $validator) {
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/login.php');
});

// Drive-Register
$klein->respond('GET', '/register', function ($request, $response, $service, $app, $validator) {
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/register.php');
});
// armmm
$klein->respond('POST', '/editprofile/action', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    // $userID = $loginInfo['userID'];

    $MemberID = $request->MemberID;     // extra hidden field
    $fst = $request->Firstname;
    $lst = $request->Lastname;
    $adr = $request->Address;
    $Subdist = $request->Subdistrict;
    $dist = $request->District;
    $prov = $request->Province;
    $post = $request->Postcode;

    // connect db
    global $database;
    $conn = $database->getConnection();
    
    // try to update db value
    try{
      $conn->beginTransaction();
      $conn->exec("UPDATE G05_Member_profile
            SET Fname = \"$fst\", Lname = \"$lst\"
            WHERE MemberID = $MemberID;");
          $conn->exec("UPDATE G05_Member_address
            SET Address = \"$adr\", Province = \"$prov\", District = \"$dist\",
            SubDistrict = \"$Subdist\", ZipCode = \"$post\"
            WHERE MemberID = $MemberID;");
          $conn->commit();
    }
    catch(PDOException $e)
    {
      $conn->rollback();
      echo('Failed :(');
      echo $e;
    }

    //$service->usr = $data;
    // $service->render('layouts/group5/editprofile.php');
     $response->redirect('/customer/membership');
     //uncomment อันนี้ออก พาไปหน้าหญิงฤดี
    //$service->back();
});

$klein->respond('GET', '/editprofile', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    global $database;
    $conn = $database->getConnection();

    // query1 Profile
    // $sql = "SELECT  pf.MemberID, pw.Password, pf.PhoneNumber, pf.Email, pt.Total_Point,
    //         pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, ads.Address,
    //         ads.Province, ads.District, ads.SubDistrict, ads.ZipCode
    //         FROM G05_Member_profile as pf, G05_Member_password as pw, G05_Member_point as pt, G05_Member_address as ads
    //         WHERE pf.MemberID=pw.MemberID and pf.MemberID=pt.MemberID and pf.MemberID = ads.MemberID
    //         and pf.MemberID = 1";
    $sql = "SELECT  pf.MemberID, pf.PhoneNumber, pf.Email, pt.Total_Point,
            pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, addr.Address,
            addr.Province, addr.District, addr.SubDistrict, addr.ZipCode
            FROM G05_Member_profile as pf
            LEFT JOIN G05_Member_point as pt ON pf.MemberID=pt.MemberID
            LEFT JOIN G05_Member_address as addr ON pf.MemberID = addr.MemberID
            WHERE pf.userID = $userID";

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

$klein->respond('POST', '/kong/action', function ($request, $response, $service, $app, $validator) {
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
