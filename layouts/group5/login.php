<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="layouts/group5/css/login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"src="layouts/group5/css/login.js"></script>
    <title>LOGIN</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="email"/>
          <input type="text" placeholder="ID card"/>
          <button>RESET PASSWORD</button>
          </br>
          <p class="message">Remember? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="/membership" method="post">
          <input type="text" name="name" id="name" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button onclick=""><
            <!-- <a href="http://localhost:8000/membership"></a> -->

            login</button>

          <p class="message">Forgot password? <a href="#">Reset password</a></p>
          </br>

        </form>
        <p class="message2">Don't have an account? <a href="http://localhost:8000/register">Resgister</a></p>
      </div>
    </div>
  </body>
</html>
