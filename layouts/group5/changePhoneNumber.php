<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <title>Change Phone Number</title>
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
      <div class="box-name-text" style="margin-left: 118px;">Current Phone Number</div>
      <div class="gap-less" style="margin-left: 130px;"><?php echo $this->currentPhone; ?></div>
      <div class="gap"></div>
      </br>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/customer/change/phonenumber/action" method="post">
            <div class="form-group">
              <label class="box-name-text" for="exampleInputEmail1">New Mobile Phone Number</label>
              <input type="text" class="form-control form-control-lg" id="PhoneNumber" name="PhoneNumber" pattern="[0-9]{10}" required>
            </div>

              <input type="submit" class="cancel-block gap red-block white-font" value="Submit">
              <button type="button" class="cancel-block gap" onclick="location = '/customer/membership'">Cancel</button>

          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
