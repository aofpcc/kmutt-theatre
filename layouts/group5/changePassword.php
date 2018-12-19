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
        <h2 style="margin-left: 70px;">Change Password</h2>
      </div>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/customer/change/password/action" method="post">
            <!-- Current Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="usr">Current Password</label>
              <input type="password" class="form-control form-control-lg" id="usr" name="oldpassword" required>
            </div>
            <!-- New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="usr">New password (Please include at least 6 characters)</label>
              <input type="password" class="form-control form-control-lg" id="usr" name="newpassword1" pattern=".{6,}" required>
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
              <label class="box-name-text gap" for="usr">Confirm new password</label>
              <input type="password" class="form-control form-control-lg" id="usr" name="newpassword2" pattern=".{6,}" required>
            </div>
            <!-- Button -->
            <div class="gap-more"></div>
              <button type="submit" class="block gap red-block white-font">Save</button>
              <button type="button" class="cancel-block gap" onclick="location = '/customer/membership'">Cancel</button>
          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
