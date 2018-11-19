<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/member_information_makeup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Memeber Information</title>
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
        <h1 style="margin-left: 15px;">Account</h1>
      </div>
      <!-- line -->
      <hr>

      <!-- membership info -->
      <div class="row">
        <!-- left column -->
        <div class="col-sm-3">
          <h3 class"set-head">MEMBERSHIP</h3>
          <a href="#" class="btn btn-secondary my-2 bold set-text">Deactive Account</a>
        </div>
        <!-- middle left-->
        <div class="col-sm-4">
          <p class="gap"></p>
          <!-- <p class="gap bold set-text">Member ID :
            <a class="Username unbold"><?php echo($this->usr[0][0])?></a>
          </p> -->
          <p class="gap bold set-text">Password :
            <a class="Password unbold">********
              <!-- <?php for ($i = 0; $i < strlen($this->usr[0][V]); $i++) { ?>
                <?php echo "*";?>
              <?php }?> -->
            </a>
          </p>
          <p class="gap bold set-text">Phone Number :
            <a class="PhoneNumber unbold"><?php echo($this->usr[0][2])?></a>
          </p>
          <p class="gap bold set-text">E-mail :
            <a class="Email unbold"><?php echo($this->usr[0][3])?></a>
          </p>
        </div>
        <!-- middle right -->
        <div class="col-sm-2">
        </div>
        <!-- right -->
        <div class="col-sm-3">
          <p class="gap"></p>
          <!-- <p class="gap set-text"><a href="localhost:8000/change/username">Change username</a></p> -->
          <p class="gap set-text"><a href="/change/password">Change password</a></p>
          <p class="gap set-text"><a href="/change/phonenumber">Change phone number</a></p>
          <p class="gap set-text"><a href="/change/password">Change e-mail</a></p>
        </div>
      </div>
      <!-- middle line -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <hr>
        </div>
      </div>
      <!-- show point -->
      <!-- middle line -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <div class="bold set-text">Remaining Point :
            <a class="set-text"><?php echo($this->usr[0][4])?></a>
            <a class="set-text">Point</a>
          </div>
        </div>
      </div>
      <!-- middle line -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <hr>
        </div>
      </div>
      <!-- redeem gift code -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleFormControlInput1" class="bold set-text">Redeem gift card promo code</label>
            <form>
              <div class="form-row">
                <div class="col-7">
                  <input type="text" class="form-control" placeholder="Enter code or pin">
                </div>
                <div class="col">
                  <button type="button" class="btn btn-danger set-text">Redeem</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
      <!-- line -->
      <hr>

      <!-- my profile -->
      <div class="row">
        <!-- left column -->
        <div class="col-sm-3">
          <h3 class"set-head">MY PROFILE</h3>
        </div>
        <!-- right column -->
        <div class="col-sm-9">
          <p class="gap"></p>
          <p class="bold set-text">National ID :
            <a class="NationalID unbold set-text">7777777777</a>
          </p>
          <p class="bold set-text gap2">First name :
            <a class="Fname unbold set-text">Firstname</a>
          </p>
          <p class="bold set-text">Last name :
            <a class="Lname unbold set-text">Lastname</a>
          </p>
          <p class="bold set-text">Gender :
            <a class="Gender unbold set-text">Gender</a>
          </p>
          <p class="bold set-text">Birth Date :
            <a class="BirthDate unbold set-text">19/03/1999</a>
          </p>
          <p class="bold set-text">Age :
            <a class="Age unbold set-text">
              19
              <a class="unbold set-text">years old</a>
            </a>
          </p>
          <p class="bold set-text">Address :
            <a class="Address unbold set-text">33/71 Soi Kanchanapisek005/1, Laksong, Bangkae, Bangkok</a>
          </p>
          <p class="bold set-text">Post code :
            <a class="PostCode unbold set-text">10160</a>
          </p>
        </br>
          <!-- Button -->
          <div>
            <button type="button" class="btn btn-danger" onclick="location = '/editprofile'">Edit profile</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
