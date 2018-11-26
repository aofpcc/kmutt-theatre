<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="register-makeup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Register</title>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar navbar-dark navbar-bg">
  <b><a class="navbar-brand mr-5 ml-3" href="#"><p class="navbar-color mb-1">CS-18</p></a></b>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
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
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>
<!-- End Navbar -->
</head>

<body class="bg-light">
  <!-- p-3 mb-2 bg-light -->
    <div class="container">
        <div class="py-5 text-center">
          <p class="mb-1">STEP 1 OF 2</p>
            <h2>Create your account</h2>
            <p class="lead">Just one more steps and you're done!
We hate paperwork, too.</p>
        </div>
        <div class="col-md-8 order-md-1 text-center">
            <div class="row">
                <h5 class="mb-3">Information Request</h5>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid password is required.
                    </div>
                </div>
            </div>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-3">
          <label for="phone">Phone Number <span class="text-muted"></span></label>
          <input type="phone" class="form-control" id="phone" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid Phone Number.
          </div>
        </div>
        <div class="col-md-6 mb-3">
      <label for="birth">Date of Birth <span class="text-muted"></span></label>
      <input type="birth" class="form-control" id="birth" placeholder="dd/mm/199x">
      <div class="invalid-feedback">
        Please enter a valid Phone Number.
      </div>
      </div>
    </div>
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="615/47 Phutthabucha, 40 Bangmot" required="">
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="Province">Province</label>
                <select class="custom-select d-block w-100" id="Province" required="">
                  <option value="">Choose...</option>
                  <option>Bangkok</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid Province.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="District">District</label>
                <select class="custom-select d-block w-100" id="District" required="">
                  <option value="">Choose...</option>
                  <option>BangMot</option>
                  <option>ThungKhru</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid District.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <!--line-->
            <hr class="mb-4">
            <!-- End line -->
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" id="Condition">
              <label class="custom-control-label" for="Condition">I have read and understood to the <u><a href="#">Terms & Condition</a></u> of BangMot Theathre.</label>
            </div>

        </div>
</body>
</html>
