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
    <!-- <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger"></button> -->
      <small>History</small>
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

              <font size="4"> ที่นั่ง </font
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



    <!-- <script src="/layouts/group1/js/booking.js" charset="utf-8"></script> -->

  </div>
</div>
</div>
</div>
</div>
