<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title><?=$this->title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="/layouts/core/css/master.css">
</head>
<body>
  <nav class="navbar navbar-custom-color">
    <div class="container-fluid nav-container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">KMUTT THEATRE</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="/test/home">Home</a></li>
        <li><a href="/test/movie">Movie</a></li>
        <li><a href="/test/newrelease">New Release</a></li>
        <li><a href="/test/promotion">Promotion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?=$this->username ?></a>
          <ul class="dropdown-menu">
            <?php foreach ($this->login_menu as $key => $value) { ?>
              <li> <a href="#"><?=$value ?></a> </li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div id="body" class="container">
    <?php $this->yieldView() ?>
  </div>

  <footer id="footer" class="container-fluid bg-4 text-center">
    <p style="margin: 0px;">Copyright &copy; 2018 Kmutt Theatre All original contents of <a href="#">theatre.sit.kmutt.ac.th</a> </p>
  </footer>
</body>
</html>
