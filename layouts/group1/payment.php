<?php

?>

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

    
  <div class="card card-temp shadow-lg">
          <div class="container">
            <br>
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260" alt=""></a>
                  </div>
                </div>
            
                <div class="col-md-8">
                    <br><br>
                    <font size="6">GingerClown</font><br><br>
                    <font size="4">30 February 2030</font><br><br>
                    <font size="4">21 : 00</font> &nbsp&nbsp&nbsp  <font size="4"> Theater 5 </font><br><br>
                    <font size="4">135 Mins</font> <br><br>
                    <font size="4">ที่นั่งเลือก</font> <<font size="4"> ราคารวม </font>
                    <p>
                        <?php //echo json_encode($this->selectedSeats);
                        if($this->selectedSeats == null){
                            echo 'select the chair';
                              // header('location: http://localhost:8000/customer/home'); ?>
                        <?php $this->render("layouts/group1/popup.php"); ?>
                      <?php
                        }else{
                            echo json_encode($this->selectedSeats);
                        }
                      ?>
                    </p>

                      </p><br><br>
                    <button type="button" class="btn btn-lg btn-default">PAYMENT</button>
                  </div>
              </div>
          </div>
        </div>
        </div>
</div>

  
  <script src="/layouts/group1/js/jquery.nicescroll.js"></script>
  <script src="/layouts/group1/js/scripts.js"></script>
</body>
</html>
