<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$this->pageTitle ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Custom fonts for this template -->
  <!-- <link href="vendor/font-awesome/css/font-aweqsome.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link href='https://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
  <script src="/layouts/group1/js/jquery.seat-charts.js"></script>
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
</head>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">KMUTT THEATER</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Booking</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Promotion</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Register</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">About As</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main">
    <h2>Booking</h2>
    <div class = "img_container">
  <img src="/layouts/group1/image/ging.jpg" width="150">
</div>
<br>
<br>
    <div class="demo">
      <div id="seat-map">
        <div class="front">SCREEN</div>
      </div>
      <div class="booking-details">
        <ul class="book-left">
          <li>Movie </li>
          <li>Time </li>
          <li>Tickets</li>
          <li>Total</li>
          <li>Seats :</li>
        </ul>
        <ul class="book-right">
          <li>: Gingerclown</li>
          <li>: April 3, 21:00</li>
          <li>: <span id="counter">0</span></li>
          <li>: <b><i>$</i><span id="total">0</span></b></li>
        </ul>
        <div class="clear"></div>

        <form action="/customer/payment" method="post">
          <ul id="selectedSeats" class="scrollbar scrollbar1"></ul>
          <button id="booknow" class="checkout-button">Book Now
        </form>

        </button>
        <div id="legend"></div>
      </div>
      <div style="clear:both"></div>
    </div>

    <!-- <script src="/layouts/group1/js/booking.js" charset="utf-8"></script> -->
    <?php $this->render("layouts/group1/js/booking.php"); ?>
  </div>
  <script src="/layouts/group1/js/jquery.nicescroll.js"></script>
  <script src="/layouts/group1/js/scripts.js"></script>
</body>
</html>
