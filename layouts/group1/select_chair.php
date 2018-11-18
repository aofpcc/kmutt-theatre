<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$this->pageTitle ?></title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <link href='https://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
  <script src="/layouts/group1/js/jquery.seat-charts.js"></script>
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
</head>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
 <a class="navbar-brand" href="http://localhost:8000/customer/kmutt_home">KMUTT THEATER</a>
 <ul class="navbar-nav">
   <li class="nav-item">
     <a class="nav-link" href="http://localhost:8000/customer/kmutt_home">home</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">promotion</a>
   </li>
 </ul>
</nav>
<br><br>
  <div class="main">
    <h2>Booking</h2>
    <div class = "img_container">
  <img src="/layouts/group1/image/ging.jpg" width="150">
</div>
<br>
<br>
    <div class="demo">
      <div id="seat-map" >
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

        <form action="/customer/kmutt_home/branch/show_time/select_chair/payment" method="post">
            <ul id="selectedSeats" class="scrollbar scrollbar1"></ul>
          <button id="booknow" class="checkout-button">Book Now
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
