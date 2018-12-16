<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Change Password</title>
<!--Navbar-->
<!-- <nav class="navbar navbar-expand-lg navbar navbar-dark navbar-bg">
  <b><a class="navbar-brand mr-5 ml-3" href="#"><p class="navbar-color mb-1">CS-18</p></a></b>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
    </ul>
  </div>
</nav> -->
<!-- End Navbar -->
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
            <!-- Current Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">First Name</label>
              <!-- <small class="right"><a href="localhost:8000/chage/password">Forget password?</a></small> -->
              <input type="text" class="form-control form-control-m" id="Firstname" name="Firstname" placeholder="<?php echo($this->usr[0][6])?>">
            </div>
            <!-- New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Last Name</label>
              <input type="text" class="form-control form-control-m" id="Lastname" name="Lastname" placeholder="<?php echo($this->usr[0][7])?>">
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control form-control-m" id="Address" name="Address" placeholder="">
            </div>
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Sub District</label>
              <input type="text" class="form-control form-control-m" id="Subdistrict" name="Subdistrict" placeholder="">
            </div>
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">District</label>
              <input type="text" class="form-control form-control-m" id="District" name="District" placeholder="">
            </div><div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Province</label>
              <input type="text" class="form-control form-control-m" id="Province" name="Province" placeholder="">
            </div><div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Post code</label>
              <input type="text" class="form-control form-control-m" id="Postcode" name="Postcode" placeholder="">
            </div>
            <!-- Button -->
            <div class="gap-more"></div>
              <button type="button" class="block gap" onclick="location = '/membership'">Save</button>
              <button type="button" class="cancel-block gap" onclick="location = '/membership'">Cancel</button>

          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
