<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
<link href="/layouts/group11/css/editprofile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Worktime Profile</h1>
    <hr>
  </div>
<form class="form-inline" action="/emp/staff/employee/worktime" method="POST">
    <div class="form-group">
        <label for="uid">ID : </label>
        <input type="text" class="form-control" name="uid" id="uid" autofocus required>
    </div>
    <button id="show_month" type="submit" class="btn btn-primary" autofocus>Submit</button>
</form>

</main>