<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <title>Reset Password</title>
</head>

<body class="body-bg">
    <!-- contaioner -->
    <div class="container">

      <!-- account -->
      <div class="row account-set-position">
        <h2 style="margin-left: 110px;">Reset Password</h2>
      </div>
      <!-- line -->
      <div class="gap"></div>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/customer/resetPassword" method="post">
            <div class="form-group">
              <label class="box-name-text" for="usr">New Password (Please include at least 6 characters)</label>
              <input type="password" class="form-control form-control-lg" id="usr" name="newpassword" pattern=".{6,}" required>
            </div>
            <div class="form-group">
              <label class="box-name-text" for="usr">Confirm New Password</label>
              <input type="password" class="form-control form-control-lg" id="usr" name="confirmpassword" pattern=".{6,}" required>
            </div>
            <div class="gap-more"></div>
            <button type="submit" class="cancel-block gap red-block white-font" name="button">Reset</button>
            <button type="button" class="cancel-block gap" onclick="location = '/customer/membership'">Cancel</button>
          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
