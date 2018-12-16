<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/layouts/group5/css/member_information_makeup.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

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
      <p></p>
      <h3>MEMBERSHIP</h3>
      <a href="#" class="btn btn-secondary my-2 bold set-text">Deactive Account</a>
    </div>
    <!-- middle left-->
    <div class="col-sm-4">
      <p class="gap"></p>
      <!-- <p class="gap bold set-text">Member ID :
            <a class="Username unbold"><?php echo ($this->usr[0][0]) ?></a>
          </p> -->
      <p class="gap bold set-text">Password :
        <a class="Password unbold">********
          <!-- <?php for ($i = 0; $i < strlen($this->usr[0][V]); $i++) {?>
                <?php echo "*"; ?>
              <?php }?> -->
        </a>
      </p>
      <p class="gap bold set-text">Phone Number :
        <a class="PhoneNumber unbold set-text">
          <?php echo ($this->usr[0]["PhoneNumber"]) ?></a>
      </p>
      <p class="gap bold set-text">E-mail :
        <a class="Email unbold set-text">
          <?php echo ($this->usr[0]["Email"]) ?></a>
      </p>
    </div>
    <!-- middle right -->
    <div class="col-sm-2">
    </div>
    <!-- right -->
    <div class="col-sm-3">
      <p class="gap"></p>
      <!-- <p class="gap set-text"><a href="localhost:8000/change/username">Change username</a></p> -->
      <p class="gap set-text"><a href="/customer/change/password">Change password</a></p>
      <p class="gap set-text"><a href="/customer/change/phonenumber">Change phone number</a></p>
      <p class="gap set-text"><a href="/customer/change/email">Change e-mail</a></p>
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
        <a class="set-text">
          <?php 
            $totalPoint = $this->usr[0]["Total_Point"];
            if ($totalPoint) {
              echo $totalPoint;
            }
            else {
              echo 0;
            }
          ?>
        </a>
        <a class="set-text">Points</a>
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
      <p></p>
      <h3 class"set-head">MY PROFILE</h3>
    </div>
    <!-- right column -->
    <div class="col-sm-9">
      <p class="gap"></p>
      <p class="bold set-text">
        National ID : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["ID_Card"]) ?>
        </a>
      </p>
      <!-- <p class="bold set-text gap2">First name : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["Fname"]) ?>
        </a>
      </p> -->
      <!-- <p class="bold set-text">Last name : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["Lname"]) ?>
        </a>
      </p> -->
      <p class="bold set-text gap2">Name : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["Fname"])." ".($this->usr[0]["Lname"]) ?>
        </a>
      </p>
      <p class="bold set-text">Gender : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["Gender"]) ?>
        </a>
      </p>
      <p class="bold set-text">Birth Date : <br/>
        <a class="unbold field-value">
          <?php echo ($this->usr[0]["BirthDate"]) ?>
        </a>
      </p>
      <p class="bold set-text">Age : <br/>
        <a class="unbold field-value">
          <?php echo $this->age; ?>
          years old
        </a>
      </p>
      <p class="bold set-text">Address : <br/>
        <a class="unbold field-value">
          <?php echo($this->usr[0]["Address"])?>
        </a>
      </p>
      <p class="bold set-text">Sub-District : <br/>
        <a class="unbold field-value">
          <?php echo($this->usr[0]["SubDistrict"])?>
        </a>
      </p>
      <p class="bold set-text">District : <br/>
        <a class="unbold field-value">
          <?php echo($this->usr[0]["District"])?>
        </a>
      </p>
      <p class="bold set-text">Province :
        <a class="unbold field-value">
        <?php echo($this->usr[0]["Province"])?>
      </a>
      </p>
      <p class="bold set-text">Post code :
        <a class="unbold field-value">
        <?php echo($this->usr[0]["ZipCode"])?>
      </a>
      </p>
      <!-- Button -->
      <div>
        <button type="button" class="btn btn-danger" onclick="location = '/customer/editprofile'">Edit profile</button>
      </div>
    </div>
  </div>
</div>
<br>
