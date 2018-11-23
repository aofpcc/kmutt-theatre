<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Change Phone Number</title>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar navbar-dark navbar-bg">
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
</nav>
<!-- End Navbar -->
</head>

<body class="body-bg">
    <!-- contaioner -->
    <div class="container">

      <!-- account -->
      <div class="row account-set-position">
        <h2 style="margin-left: 110px;">Change Phone Number</h2>
      </div>
      <!-- line -->
      <div class="gap"></div>
      <div class="box-name-text" style="margin-left: 97px;">Current Phone Number</div>
      <div class="gap-less" style="margin-left: 97px;">099 999 9999</div>
      <div class="gap"></div>
      </br>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/change/phonenumber/action" method="post">
            <div class="form-group">
              <label class="box-name-text" for="exampleInputEmail1">New Mobile Phone Number</label>
              <input type="text" class="form-control form-control-lg" id="PhoneNumber" name="PhoneNumber" placeholder="">
            </div>
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Current Password</label>
              <!-- <small class="right"><a href="localhost:8000/chage/password">Forget password?</a></small> -->
              <input type="password" class="form-control form-control-lg" id="Password" name="Password" placeholder="">
            </div>
            <div class="gap-more"></div>

              <input type="submit" class="cancel-block gap" value="Submit">
              <button type="button" class="cancel-block gap" onclick="location = '/membership'">Cancel</button>

          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
