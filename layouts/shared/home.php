<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$this->pageTitle ?></title>
  </head>
  <body>
    <form class="" action="/login/action" method="post">
      <label for="">Username</label> <input type="text" name="username" value="">
      <br>
      <label for="">Password</label> <input type="text" name="password" value="">
      <br>
      <button type="submit" name="button">Submit</button>
    </form>

    <script type="text/javascript">
      <?php if ($this->errs) foreach ($this->errs as $key => $value): ?>
        alert("<?php echo $value; ?>");
      <?php endforeach; ?>
    </script>
  </body>
</html>
