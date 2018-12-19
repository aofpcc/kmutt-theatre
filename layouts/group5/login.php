<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="layouts\group5\login_make.css">
</head>
<br>

<div class="container py-5">
  <div class="py-3 text-center">
    <p class="mb-1"></p>
    <h2>Please sign in</h2>
  </div>
  <div class="" style="">
    <form action="/customer/login" method="POST">
      <div style="margin: auto; width: 40%">
        <div>
          <label for="username"></label>
          <input type="username" class="form-control box" id="username" placeholder="Enter Username" name="username" required>
        </div>
        <div class="mb-2" style="">
          <label for="password"></label>
          <div class="">
            <input type="password" class="form-control" style="" id="password" placeholder="Enter password" name="password" required>
          </div>
        </div>
      </div>

      <div class="text-center mb-2">
        <p class="" style="text-align: right; padding-right: 30%;"><a href="/customer/forgetPassword">Forget password?</a></p>
      </div>
      <div style="margin: auto; width: 15%;">
        <button type="submit" class="btn color-box" style="margin-top: 5%; width:100%; background-color: #DC143C; color: #FFFFFF">Login</button>
      </div>

      <div class="text-center mb-2 mt-5">
        <p class="" style="margin-top: 0%"> New to Theatre? <a href="/customer/register">Sign up now » </a></p>
      </div>
    </form>
  </div>
</div>
