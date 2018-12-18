<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <title>Change Password</title>
</head>

<body class="body-bg">
    <!-- contaioner -->
    <div class="container">

      <!-- account -->
      <div class="row account-set-position">
        <h2 style="margin-left: 110px;">Change Password</h2>
      </div>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/change/password/action" method="post">
            <!-- Current Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Current Password</label>
              <!-- <small class="right"><a href="localhost:8000/chage/password">Forget password?</a></small> -->
              <input name="oldPassword" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="">
            </div>
            <!-- New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">New password (8-20 characters)</label>
              <input name="newPassword1" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="">
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="exampleInputPassword1">Confirm new password</label>
              <input name="newPassword2" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="">
            </div>
            <!-- Button -->
            <div class="gap-more"></div>
              <button type="submit" class="block gap">Save</button>
              <button type="button" class="cancel-block gap" onclick="location = '/customer/membership'">Cancel</button>
          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
