<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="layouts\group5\register-makeup.css">
</head>
<br>

<!-- <div class="center-set">
<h2>Login Page</h2>
  <form action="/test/login/action" method="POST">
    <div class="form-group">
      <label for="username"></label>
      <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="password"></label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  </div> -->

  <form action="/test/login/action" method="POST" class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
