<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- <link href='https://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'> -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

  <br>
  <div class="main">
    <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 3</button>
      <small>Payment</small>
    </h1>

    <div class="card card-temp shadow-lg">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <!-- <a href="#"> -->
                  <img class="card-img-top" src="<?= $this->image ?>" alt="">
                <!-- </a> -->
              </div>
            </div>

            <div class="col-md-8">
              <font size="6">
                <?php echo $this->title; ?>
                <br>
              </font>

              <font size="4">
                <i class="far fa-clock"></i>
                <?php echo $this->date; ?>
                <b><?php echo $this->time; ?></b>
                <!-- 30 February 2030

                21 : 00 &nbsp&nbsp&nbsp <br> -->
                <br>
              </font>

              <font size="4">
                <i class="fas fa-building"></i> THEATRE <?php echo $this->theatre_no; ?> <br>
              </font>
              <br>

                    <font size="4"> ที่นั่ง </font><br>
                    <?php

                    $arry = json_decode(json_encode($this->seats), true);
                    // var_dump($this->seats);
                    // die;
                    foreach ($arry as $result)
                    {
                      echo 'row : ', $result['row'],'   seat : ', $result['seat'],'<br/>';
                    }
                    ?>
                    <br> <br>

              <?php
                if($this->selectedSeats == null){
                  $this->render("layouts/group1/popup_forget_chair.php");
                }
                else if(count($this->selectedSeats) >= 10){
                  $this->render("layouts/group1/popup_booking_ten.php");
                }
                else{;
                    // echo json_encode(count($this->selectedSeats));
                }
              ?>
              <!-- ที่นั่ง <br /> -->

              <font size="4"> ราคารวม </font>
              <br/>
              <p>
                <li>: <b><i>$</i><span id="total">0</span></b></li>
              </p>
              <br>

              </p><br>

              <?php $this->partial("layouts/group1/js/countdown.php");
              // var_dump($this->showtime_id);
              // die; ?>
              <form action = "/customer/kmutt/ticket/<?= $this->showtime_id?>" method = "post">
                <button name = Kbank value="Kbank" id="Kbank" class="btn btn-lg btn-default" >KBANK</button>
                <!-- <button name =  class="btn btn-lg btn-default" >SCB</button>
                <button type="button" class="btn btn-lg btn-default" >CREDIT</button>
                <button type="button" class="btn btn-lg btn-default" >CLUBCARD</button> -->
                <!-- <button name = "book_seat" value = "book_seat" id = "book_seat" class = "checkout-button">Book now
                </button>
   -->        </form>


              <br><br>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>


  <!-- <script src="/layouts/group1/js/jquery.nicescroll.js"></script> -->
  <?php $this->partial("layouts/group1/js/booking.php");  ?>
  <script src="/layouts/group1/js/scripts.js"></script>
