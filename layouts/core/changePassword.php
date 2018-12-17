<div class="col-xs-6">
  <form action="/test/changePassword" method="post">
    <p>
      Change password
    </p>
    <div class="form-group">
      <label for="usr">Old Password:</label>
      <input type="password" class="form-control" id="usr" name="oldpassword" required>
    </div>

    <div class="form-group">
      <label for="usr">New Password:</label>
      <input type="password" class="form-control" id="usr" name="newpassword" required>
    </div>

    <div class="form-group">
      <label for="usr">Confirm New Password:</label>
      <input type="password" class="form-control" id="usr" name="confirmpassword" required>
    </div>
    <button type="submit" class="btn btn-danger" name="button">Reset</button>
  </form>
</div>
