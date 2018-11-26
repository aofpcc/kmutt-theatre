<?php

?>

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
    <h1 class="my-4"><button type="button" class="btn btn-lg btn-primary">STEP 4</button>
      <small>Payment</small>
    </h1>
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
                    <br>
                    <font size="6">GingerClown</font><br><br>
                    <font size="4">30 February 2030</font><br><br>
                    <font size="4">21 : 00</font> &nbsp&nbsp&nbsp  <font size="4"> Theater 5 </font><br><br>
                    <font size="4">135 Mins</font> <br><br>
                    <font size="4">ที่นั่งเลือก</font> <<font size="4"> ราคารวม </font>
                    <p>

                         <?php //echo json_encode($this->selectedSeats);
                        if($this->selectedSeats == null){
                      //       echo 'select the chair';
                      //         // header('location: http://localhost:8000/customer/home');
                         $this->render("layouts/group1/popup_forget_chair.php");
                      // <?php
                        }else if(count($this->selectedSeats) >= 10){
                          $this->render("layouts/group1/popup_booking_ten.php");
                        }else{
                            echo json_encode($this->selectedSeats);
                        }
                      ?>

                    </p>

                  </p><br> <!--link to ticket-->
                    <button type="button" class="btn btn-lg btn-default" >KBANK</button>
                    <button type="button" class="btn btn-lg btn-default" >SCB</button>
                    <button type="button" class="btn btn-lg btn-default" >CREDIT</button>
                    <button type="button" class="btn btn-lg btn-default" >CLUBCARD</button>

                    <br>
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
