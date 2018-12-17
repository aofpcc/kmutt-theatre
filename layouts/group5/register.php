<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="layouts\group5\register-makeup.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
  <!-- <title>Register</title> -->
  <!--Navbar-->
  <!-- <nav class="navbar navbar-expand-lg navbar navbar-dark navbar-bg">
  <b><a class="navbar-brand mr-5 ml-3" href="#"><p class="navbar-color mb-1">CS-18</p></a></b> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <!-- <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li> -->
  <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
  <!-- </ul>
  </div>
</nav> -->
  <!-- End Navbar -->
</head>

<!-- p-3 mb-2 bg-light -->
<div class="container">
  <div class="py-5 text-center">
    <p class="mb-1">STEP 1 OF 2</p>
    <h2>Create your account</h2>
    <p class="lead">Just one more steps and you're done!
      We hate paperwork, too.</p>
  </div>
  <div class="col-md-8 order-md-1">
    <div class="row">
      <h5 class="mb-3">Information Request</h5>
    </div>

    <!-- Start Resgister -->
    <form action="/customer/register-form" method="POST">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="ID_card">ID Card</label>
            <div class="input-group">
              <input type="text" pattern="[0-9]{13}" title="13 digits required" class="form-control" id="id_card" name="id_card" placeholder="Enter your Citizen ID" require>
              <div class="invalid-feedback" style="width: 100%;">
                Your Citizen ID is required.
                 </div>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" pattern="[A-Za-z0-9]{5,}" title="Please include at least 5 characters" class="form-control" id="username" name="username" placeholder="Username" require>
              <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
                ) </div>
            </div>
        </div>
</div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="Password">Password</label>
            <!-- <input type="text" class="form-control" id="password" name="password" value="" placeholder="Enter your password">
                    <div class="invalid-feedback">
                        Valid password is required.
                    </div> --><input
              type="password" title="Please include at least 6 characters" name="password" pattern=".{6,}" id="password" class="form-control" placeholder="Enter your Password..." required="" value="123456">
            <div class="invalid-feedback">
              Valid password is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="Password">
              <font color="white">.</font>
            </label>
            <!-- <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password again..." value="">
                    <div class="invalid-feedback">
                        Valid password is required.
                    </div> -->
            <input type="password" name="confirmpassword" pattern=".{6,}" id="password" class="form-control" value="" placeholder="Enter your Password again..."
              required>
            <div class="invalid-feedback">
              Valid password is required.
            </div>
          </div>
        </div>

      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-md-6 mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender">Gender</label>
            <select class="custom-select d-block w-100" id="gender" name="gender">
              <option value="">Choose...</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other...</option>
            </select>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="phone">Phone Number <span class="text-muted"></span></label>
            <input type="phone" pattern="[0-9]{10}" title="Please include just only the numbers" class="form-control" id="phone" placeholder="" name="phone">
            <div class="invalid-feedback">
              Please enter a valid Phone Number.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="birth">Date of Birth <span class="text-muted"></span></label>
            <input type="date" class="form-control" id="birth" name="birth" placeholder="dd/mm/199x">
            <div class="invalid-feedback">
              Please enter a valid Phone Number.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="615/47 Phutthabucha, 40 Bangmot">
          <div class="invalid-feedback">
            Please enter your address.
          </div>
          </div>
          <div class="col-md-6 mb-3">
          <label for="Province">Province</label>
            <select class="custom-select d-block w-100" id="Province" name="province">
              <option value="">Choose...</option>
              <option>Bangkok</option>
            </select>
            <!--<script src="scr1.js"></script>  ****************** Script here ***************************-->
            <div class="invalid-feedback">
              Please select a valid Province.
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
          <label for="District">District</label>
            <select class="custom-select d-block w-100" id="District" name="district">
              <option value="">Choose...</option>
              <option>BangMot</option>
              <option>ThungKhru</option>
            </select>
            <!--<script src="scr2.js"></script>  ****************** Script here ***************************-->
            <div class="invalid-feedback">
              Please select a valid District.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="SubDistrict">Sub District</label>
            <select class="custom-select d-block w-100" id="SubDistrict" name="SubDistrict">
              <option value="">Choose...</option>
              <option>BangMot</option>
              <option>ThungKhru</option>
            </select>
            <!--<script src="scr2.js"></script>  ****************** Script here ***************************-->
            <div class="invalid-feedback">
              Please select a valid District.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" pattern="[0-9]{5}"class="form-control" id="zip" placeholder="" name="zip" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Confirm" />
      </form>
  </div>
  <!-- End Register -->
  <!--line-->
  <!-- <hr class="mb-4"> -->
  <!-- End line -->

  <!-- <div class="custom-control custom-checkbox mb-5">
              <input type="checkbox" class="custom-control-input" id="Condition">
              <label class="custom-control-label" for="Condition">I have read and understood to the <u><a href="#">Terms & Condition</a></u> of BangMot Theathre.</label>
            </div> -->

</div>
</div>
<!-- Footer -->
<!-- <footer class="text-muted footer-bg">
<div class ="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    </footer> -->
</div>
<br>
