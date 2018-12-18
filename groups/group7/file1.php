<?php
$klein->respond('GET', '/group7', function ($request, $response, $service, $app, $validator) {
  $conn = $app->db->getConnection();
  $service->render('layouts/group7/home.php');
});

$klein->respond('GET', '/invitations/[:id]', function ($request, $response, $service, $app, $validator) {
  $conn = $app->db->getConnection();
  $service->title = "Invitation Page";
  $service->bootstrap3 = false;
  $service->id = $request->id;
  $id = $request->id;
  $invite_data = [
    
  ];

  $data = $conn->query("SELECT * from G07_invitation WHERE invitation_code = '$id'")->fetchAll(PDO::FETCH_ASSOC);
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
      $stmt = $conn->prepare("insert into G07_invitation(showtime_id, member_id, invitation_code)
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
  } catch (Exception $e) {
    //throw $th;
    $conn->rollback();
    $service->flash("Err " + $e->getMessage());
  }

  // $code = uniqid();
  // $response->dump($code);
  // $response->dump($showtime_id);
  // $response->sendBody();
});