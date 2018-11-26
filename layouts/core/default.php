<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title><?=$this->title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if($this->bootstrap3) {?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/layouts/core/css/master.css">
  <?php }else{ ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/layouts/core/css/master4.css">
  <?php }?>
</head>
<body>
  <?php if($this->bootstrap3) { ?>
  <nav class="navbar navbar-custom-color">
    <div class="container-fluid nav-container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">KMUTT <?=$this->pageRole ?></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="/test/home">Home</a></li>
        <li class="nav-item"><a href="/test/movie">Movie</a></li>
        <li class="nav-item"><a href="/test/newrelease">New Release</a></li>
        <li class="nav-item"><a href="/test/promotion">Promotion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?=$this->username ?></a>
          <ul class="dropdown-menu">
            <?php foreach ($this->login_menu as $key => $value) { ?>
              <li> <a href="<?=$value["href"] ?>"><?=$value["name"] ?></a> </li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <?php }else{ ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top navbar-custom-color">
  <!-- Brand/logo -->
      <a class="navbar-brand" href="#">KMUTT THEATRE</a>
  <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">New Release</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promotion</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
           Welcome, <?=$this->username ?>
          </a>
        <div class="dropdown-menu">
          <?php foreach ($this->login_menu as $key => $value) { ?>
            <a class="dropdown-item" href="<?=$value["href"] ?>"><?=$value["name"] ?></a>
          <?php } ?>
        </div>
      </li>
    </ul>
    </nav>
  <?php } ?>

  <div id="body" class="container">
    <?php $this->yieldView() ?>
  </div>

  <script>
  <?php
      $this->xxx = $this->flashes();
      if ($this->xxx["info"]) foreach ($this->xxx["info"] as $key => $value): ?>
        alert("<?php echo $value; ?>");
      <?php endforeach; ?>
  </script>

  <footer id="footer" class="container-fluid bg-4 text-center">
    <div class="col-xs-12">
    <p style="margin: 0px;">Copyright &copy; 2018 Kmutt Theatre All original contents of <a href="#">theatre.sit.kmutt.ac.th</a> </p></div>
  </footer>
</body>
</html>
