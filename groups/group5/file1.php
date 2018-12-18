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
    $sql = "SELECT  pf.MemberID, pf.PhoneNumber, pf.Email, pt.totalpoint,
            pf.ID_Card, pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, addr.Address,
            addr.Province, addr.District, addr.SubDistrict, addr.ZipCode
            FROM G05_Member_profile as pf
            LEFT JOIN G05_totalpoint as pt ON pf.MemberID=pt.MemberID
            LEFT JOIN G05_Member_address as addr ON pf.MemberID = addr.MemberID
            WHERE pf.MemberID = $userID";
    // echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // query2 Age
    $sql2 = "SELECT (year(current_date)-year(pf.BirthDate)) as Age
             FROM G05_Member_profile as pf
             WHERE pf.MemberID = $userID";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $age = $stmt->fetchAll();

    // send some params and render the page
    $service->title = "Member Information";
    $service->bootstrap3 = false;
    $service->usr = $data;
    $service->ages = $age;
    $service->render('layouts/group5/membership.php');
});

    // Forget Password (page)
    $klein->respond('GET', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $service->title = "Forget Password";
        $service->render('layouts/group5/forgetPassword.php');
    });

    // Forget Password (actual SQL)
    $klein->respond('POST', '/forgetPassword', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->forgetPassword($request->email);
        $service->title = "Forget Password ";
        $service->content = "Check your email to change your password";
        $service->render('layouts/core/home.php');
    });

    // Reset Password (page)
    $klein->respond('GET', '/forgetPassword/reset/[:base]', function ($request, $response, $service, $app, $validator) {
        $result = $app->login->resetPassword($request->base);
        $service->render('layouts/group5/resetPassword.php');
    });

    // Reset Password (actual SQL)
    $klein->respond('POST', '/resetPassword', function ($request, $response, $service, $app, $validator) {
      // die("Hoi");
        $service->validateParam('newpassword', 'New Password cannot be null')->notNull();
        $service->validateParam('confirmpassword', 'Confirm Password cannot be null')->notNull();
        if ($request->newpassword != $request->confirmpassword) {
            $service->flash('Shit Not the same');
            $service->back();
        }
        $result = $app->login->setNewPassword($request->newpassword);
        // $p = $service->passValue;
        if ($result["update"]) {
            $service->flash("Password was reseted");

        } else {
            $service->flash("Password was not reseted. Please Contact Us");
        }
         // $service->passValue = $p;

        $response->redirect("/customer/login");
        $response->sendHeaders();
    });


// change password (page)
$klein->respond('GET', '/change/password', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    // $loginInfo = $app->login->requireLogin('customer');
    // $userID = $loginInfo['userID'];
    $result = $app->login->requireLogin('customer');
    $newOne = $service->passValue;
    $newOne["userID"] = $result["userID"];
    $service->passValue = $newOne;
    $service->render('layouts/group5/changePassword.php');
});

// change password (actual SQL)
$klein->respond('POST', '/change/password/action', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

    $oldPassword = $request->oldpassword;
    $newPassword1 = $request->newpassword1;
    $newPassword2 = $request->newpassword2;

    if($newPassword1 != $newPassword2) {
      $service->flash("New Password has not matched.");
      $service->back();
      $response->sendHeaders();
      return;
    }

    $result = $app->login->changePassword($oldPassword, $newPassword1);
    if (!$result["change"]) {
        $service->flash("The old password incorrect");
        $service->back();
        $response->sendHeaders();
    }
    $response->redirect("/customer/membership");
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
            WHERE MemberID = $userID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // echo $userID;
    $pnb = $data[0]["PhoneNumber"];

    // render the page
    $service->currentPhone = $data[0]['PhoneNumber'];
    $service->render('layouts/group5/changePhoneNumber.php');
});

// change phone number (SQL)
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
           WHERE MemberID = $userID";
    $stmt = $conn->prepare($sql3);
    $stmt->execute();
    $response->redirect('/customer/membership');
});

// member information
$klein->respond('GET', '/login', function ($request, $response, $service, $app, $validator) {
    $app->login->requireNotLogin('/customer/kmutt_home');
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/login.php');
});

// Drive-Register
$klein->respond('GET', '/register', function ($request, $response, $service) {
    $service->title = "Register New Member";
    $service->bootstrap3 = false;
    global $database;
    $conn = $database->getConnection();
    $service->pageTitle = 'Fish and Chips';
    $service->render('layouts/group5/register.php');
});
// armmm
$klein->respond('POST', '/editprofile/action', function ($request, $response, $service, $app, $validator) {
    // get login info (send to login page if not logged in)
    $loginInfo = $app->login->requireLogin('customer');
    $userID = $loginInfo['userID'];

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
            WHERE MemberID = $userID;");
          $conn->exec("UPDATE G05_Member_address
            SET Address = \"$adr\", Province = \"$prov\", District = \"$dist\",
            SubDistrict = \"$Subdist\", ZipCode = \"$post\"
            WHERE MemberID = $userID;");
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
    $sql = "SELECT  pf.MemberID, pf.PhoneNumber, pf.Email, pf.ID_Card,
            pf.Fname, pf.Lname, pf.Gender, pf.BirthDate, addr.Address,
            addr.Province, addr.District, addr.SubDistrict, addr.ZipCode
            FROM G05_Member_profile as pf
            LEFT JOIN G05_Member_address as addr ON pf.MemberID = addr.MemberID
            WHERE pf.MemberID = $userID";

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
    $service->age = $age;
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

// Drive-php-register
$klein->respond('POST', '/register-form', function ($request, $response, $service, $app, $validator) {
    if ($request->password != $request->confirmpassword) {
        $service->flash("MTF Password has not matched");
        $response->redirect('/customer/register');
        $response->sendHeaders();
        die;
    }
    $conn = $app->db->getConnection();
    try {
        $conn->beginTransaction();

        $username = $request->username;
        $password = $request->password;
        $password = $request->confirmpassword;
        $email = $request->email;
        $validateLink = "/test/verify"; // neeed to have / before  and no / at the end
        $role = 'customer';
        $result = $app->login->register($username, $password, $email, $validateLink, $role);
        if ($result['created']) {
            $userID = $result['userID'];
            $query = "insert into G05_Member_profile(MemberID, ID_Card, FName, Lname, Gender, Birthdate, Email, PhoneNumber)
            values(:userID, :ID_Card, :FName, :Lname, :Gender, :Birthdate, :Email, :PhoneNumber);";
            $id_card = $request->id_card;
            $firstname = $request->firstName;
            $lastname = $request->lastName;
            $gender = $request->gender;
            $phone = $request->phone;
            $birth = $request->birth;

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":userID", $userID);
            $stmt->bindParam(":ID_Card", $id_card);
            $stmt->bindParam(":FName", $firstname);
            $stmt->bindParam(":Lname", $lastname);
            $stmt->bindParam(":Gender", $gender);
            $stmt->bindParam(":Birthdate", $birth);
            $stmt->bindParam(":Email", $email);
            $stmt->bindParam(":PhoneNumber", $phone);

            $stmt->execute();
            // address

            $query = "insert into G05_Member_address(MemberID, Address, Province, District, ZipCode)
            values(:userID, :Address, :Province, :District, :ZipCode);";

            $address = $request->address;
            $province = $request->province;
            $district = $request->district;
            // $subDistrict = $request->phone;
            $zip = $request->zip;

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":userID", $userID);
            $stmt->bindParam(":Address", $address);
            $stmt->bindParam(":Province", $province);
            $stmt->bindParam(":District", $district);
            // $stmt->bindParam(":SubDistrict", $SubDistrict);
            $stmt->bindParam(":ZipCode", $zip);
            $stmt->execute();

            $conn->commit();
            $service->flash("User created");
            $app->login->loginPage();
        } else {
            echo "Failed\n";
            echo $result["data"];
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        $conn->rollback();
    }
});

//transaction
$klein->respond('GET', '/transaction_point', function ($request, $response, $service, $app, $validate) {
    $userID = $app->login->requireLogin('customer')["userID"];
    $service->title = "Point History";
    $service->bootstrap3 = false;
    global $database;
    $conn = $database->getConnection();

    $query = "select MemberID, date(date) as date, time(date) as time, type, point, prefix
    from G05_v_point_type_member_date
    where MemberID = :MemberID
    order by date";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":MemberID", $userID);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $response->dump($result);
    // $response->sendBody();
    // die;


    $service->title = 'Fish and Chips';
    $service->list = $result;
    $service->render('layouts/group5/transcation_point.php');
});

//add
  $klein->respond('GET', '/g05/test_add_point', function ($request, $response, $service, $app, $validator) {
    $x = $app->point->addPoint([
        "type" => "Ticket", //FNB
        "memberID" => "151",
        "point" => "300",
        "transactionID" => "X01AB"
    ]);
    if($x["result"]) {
        // ok
    }else{
        // not ok
    }
});

  //subtract
  $klein->respond('GET', '/g05/test_subtract_point', function ($request, $response, $service, $app, $validator) {
    $x = $app->point->subtractPoint([
      "type" => "Ticket",
      "memberID" => "151",
      "point" => "150"
    ]);
    if($x["result"]) {
      // create transaction
      $x["redeemID"];
    }else{
      //

    }
});
