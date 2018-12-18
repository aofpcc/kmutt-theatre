<?php
$klein->respond('GET', '/group7', function ($request, $response, $service, $app, $validator) {
  $conn = $app->db->getConnection();
  $service->render('layouts/group7/home.php');
});

$klein->respond('GET', '/invitations/[:code]', function ($request, $response, $service, $app, $validator) {
  $userID = $app->login->requireLogin('customer')["userID"]."";
  $conn = $app->db->getConnection();

  $code = $request->code;

  // check invitation code valid
  $query = "SELECT * From G07_invitation WHERE invitation_code =:code";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":code", $code);
  $stmt->execute();
  $num = $stmt->rowCount();

  if($num == 0) {
    $service->flash("Invalid invitation code");
    $service->back();
    return;
  }

  $temp = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $invitation_id = $temp[0]["invitation_id"];
  
  // $response->dump();
  // $response->sendBody();
  // die;

  // check user id in invitation code
  $query = "SELECT * 
  From G07_invitation a 
  natural join G07_group b
  WHERE member_id=:member_id";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":member_id", $userID);
  $stmt->execute();
  $num = $stmt->rowCount();

  if($num == 0) {
    try {
      $query = "INSERT into G07_group(invitation_id, member_id) 
      values(:invitation_id, :member_id)";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(":member_id", $userID);
      $stmt->bindParam(":invitation_id", $invitation_id);
      $stmt->execute();
    }catch(Exception $e) {
      $service->flash("Error invitation insert U, Please Contact Us");
      $service->back();
      return;
    }
  }
  
  $service->title = "Invitation Page";
  $service->bootstrap3 = false;
  $service->id = $request->code;
  
  $invite_data = [
    
  ];

  $data = $conn->query("SELECT * from G07_invitation WHERE invitation_code = '$code'")->fetchAll(PDO::FETCH_ASSOC);
  $data = $data[0];

    $invite_data["code"] = $data["invitation_code"];
    $invite_data["showtime_id"] = $data["showtime_id"];
    $invite_data["list"] = [];
    
    $invitation_id = $data["invitation_id"];
    $data = $conn->query("SELECT *
    from G07_v_allgroups a
    join G05_Member_profile b on a.member_id = b.MemberID
    WHERE invitation_id = $invitation_id;")->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $d) {
      array_push($invite_data["list"], [
        "Name" => $d["Fname"],
        "Phone" => $d["PhoneNumber"],
        "Email" => $d["Email"]
      ]);
    }
  $service->invite_data = $invite_data;
  $service->render("layouts/group7/invitations.php");
});

$klein->respond('GET', '/invitation/showtime/[:showtime_id]', function ($request, $response, $service, $app, $validator) {
  $result = $app->login->requireLogin('customer');
  $userID = $result["userID"]."";
  $showtime_id = $request->showtime_id;
  $conn = $app->db->getConnection();

  try {
    $conn->beginTransaction();
    $data = $conn->query("SELECT * from G07_v_allgroups WHERE member_id = $userID and showtime_id = $request->showtime_id")->fetchAll(PDO::FETCH_ASSOC);
    if(count($data) == 0) {
      // do something
      $stmt = $conn->prepare("insert into G07_invitation(showtime_id, header_id, invitation_code)
        values(:showtime_id, :member_id, :invitation_code);");
      $stmt->bindParam(":showtime_id", $showtime_id);
      $stmt->bindParam(":member_id", $userID);
      $code = uniqid();
      $stmt->bindParam(":invitation_code", $code);
      $stmt->execute();
      $invitation_id = $conn->lastInsertId();
      

      $stmt = $conn->prepare("insert into G07_group(invitation_id, member_id)
      values(:invitation_id, :member_id);");
      $stmt->bindParam(":invitation_id", $invitation_id);
      $stmt->bindParam(":member_id", $userID);
      $stmt->execute();
    }else{
      $invite_code = $data[0]["invitation_code"];
      $response->redirect("/customer/invitations/$invite_code");
    }
    $conn->commit();
    $response->redirect("/customer/invitations/$code");
  } catch (Exception $e) {
    //throw $th;
    $conn->rollback();
    $service->flash("Err " . $e->getMessage());
    $service->back();
  }

  // $code = uniqid();
  // $response->dump($code);
  // $response->dump($showtime_id);
  // $response->sendBody();
});