<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/layouts/group5/css/change.css">
    <title>Forget Password</title>
</head>

<body class="body-bg">
    <!-- contaioner -->
    <div class="container">

      <!-- account -->
      <div class="row account-set-position">
        <h2 style="margin-left: 110px;">Forget Password</h2>
      </div>
      <!-- line -->
      <div class="gap"></div>
      <!-- change form -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <form action="/customer/forgetPassword" method="post">
            <div class="form-group">
              <p>Please enter your email to get reset password link</p>
              <label class="box-name-text" for="usr">Email</label>
              <input type="email" class="form-control form-control-lg" id="usr" name="email" required>
            </div>
            <div class="gap-more"></div>
            <button type="submit" class="cancel-block gap red-block white-font" name="button" >Send</button>
            <button type="button" class="cancel-block gap" onclick="location = '/customer/login'">Cancel</button>
          </form>
        </div>
        <div class="col-sm-5"></div>
      </div>

    </div>
  </body>
</html>
