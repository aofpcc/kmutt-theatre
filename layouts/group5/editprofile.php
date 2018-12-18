<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Change Password</title>
</head>

<body class="body-bg">
    <!-- contaioner -->
    <div class="container">

      <!-- account -->
      <div class="row account-set-position">
        <h2 style="margin-left: 110px;">Edit Profile</h2>
      </div>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/customer/editprofile/action" method="post">
            <!-- HIDDEN FIELD: MemberID -->
            <input type="hidden" name="MemberID" value="<?php echo($this->usr[0]['MemberID'])?>" />

            <!-- Current Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">First Name</label>
              <!-- <small class="right"><a href="localhost:8000/chage/password">Forget password?</a></small> -->
              <input type="text" class="form-control form-control-m" id="Firstname" name="Firstname" value="<?php echo($this->usr[0]['Fname'])?>">

            </div>
            <!-- New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Last Name</label>
              <input type="text" class="form-control form-control-m" id="Lastname" name="Lastname" value="<?php echo($this->usr[0]['Lname'])?>">
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control form-control-m" id="Address" name="Address" value="<?php echo($this->usr[0]['Address'])?>">
            </div>
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Sub District</label>
              <input type="text" class="form-control form-control-m" id="Subdistrict" name="Subdistrict" placeholder="" value="<?php echo($this->usr[0]['SubDistrict'])?>">
            </div>
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">District</label>
              <input type="text" class="form-control form-control-m" id="District" name="District" placeholder="" value="<?php echo($this->usr[0]['District'])?>">
            </div><div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Province</label>
              <input type="text" class="form-control form-control-m" id="Province" name="Province" placeholder="" value="<?php echo($this->usr[0]['Province'])?>">
            </div><div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Post code</label>
              <input type="text" class="form-control form-control-m" id="Postcode" name="Postcode" placeholder="" value="<?php echo($this->usr[0]['ZipCode'])?>">
            </div>
            <!-- Button -->
            <div class="gap-more"></div>
              <center><div>
                <button type="submit" class="block gap red-block white-font">Save</button>
                <button type="submit" class="cancel-block gap">Cancel</button>
              </div></center>
            </br>
            </br>
            </br>
          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
