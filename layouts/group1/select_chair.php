<head>
  <title><?=$this->passValue["title"] ?></title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->


  <link href='https://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <script src="/layouts/group1/js/jquery-1.11.0.min.js"></script>
  <script src="/layouts/group1/js/jquery.seat-charts.js"></script>
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">

</head>

  <br>
  <div class="main">
    <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 2</button>
      <small>Select seats</small>
    </h1>
    <div class="card card-temp shadow-lg">
            <div class="container">
              <br>
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?= $this->image ?>" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-7">
                      <font size="3" style="font-weight:bold"> Movie Name: <?=$this->title ?></font><br>
                      <font size="3">Date   : <?=$this->startDate ?></font><br>
                      <font size="3">Time   : <?= $this->startTime ?></font> &nbsp&nbsp&nbsp
                      <font size="3"> Theater : <?= $this->id_room ?> </font><br>
                      <font size="3">Length : <?= $this->length ?></font> <br><br>
                      <font size="3" style="font-weight:bold">Type of seat : </font> <font size = "3"><?=$this->type_seat ?></font> <br><br>
                      <font size="3" style="font-weight:bold">Information about seat : </font> <front size = "3"><?=$this->seat_info ?></front><br><br>
                      <font size="3" style="font-weight:bold">Price of seat : </font> <font size = "3"><?=$this->price ?></font><br>

                    <br> <!--link to ticket-->
                    <button type="button" class="btn btn-lg btn-danger"
                    onclick="location.href = '/customer/invitation/showtime/<?=$this->showtime_id?>'">INVITED FRIEND
                  </button>

                    </div>
                </div>
            </div>
          </div>
<br>
<br>
    <div class="demo">
      <div id="seat-map" >
        <div class="front">SCREEN</div>
      </div>
      <div class="booking-details">
        <ul class="book-left">
          <!-- <li>Movie </li>
          <li>Time </li> -->
          <li>Tickets</li>
          <li>Total</li>
          <li>Seats :</li>
        </ul>
        <ul class="book-right">
          <!-- <li>: Gingerclown</li>
          <li>: April 3, 21:00</li> -->
          <li>: <span id="counter">0</span></li>
          <li>: <b><i>$</i><span id="total">0</span></b></li>
        </ul>
        <div class="clear"></div>

            <?php //foreach($this->movie_id as $movie_id) { ?>
            <form action = "/customer/kmutt_home/branch/show_time/select_chair/payment/<?= $this->showtime_id?>" method = "post">
                <ul id="selectedSeats" class="scrollbar scrollbar1"></ul>
              <button name = "book_seat" value = "book_seat" id = "book_seat" class = "checkout-button">Book now
              </button>

        <div id="legend"></div>
      </div>
      <div style="clear:both"></div>
      </div> </form>
    <?php //} ?>


    <!-- <script src="/layouts/group1/js/booking.js" charset="utf-8"></script> -->
    <?php $this->partial("layouts/group1/js/booking.php"); ?>
  </div>
  <script src="/layouts/group1/js/jquery.nicescroll.js"></script>
  <script src="/layouts/group1/js/scripts.js"></script>
