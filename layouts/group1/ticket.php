<head>
  <title><?=$this->passValue["pageTitle"] ?></title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
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
    <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 4</button>
      <small>Finish</small>
    </h1>
    <div class="card card-temp shadow-lg">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <!-- <a href="#"> -->
                  <img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260" alt="">
                <!-- </a> -->
              </div>
            </div>

            <div class="col-md-8">
              <font size="6">
                <?php echo $this->movie_name; ?>
                <br>
              </font>

              <font size="4">
                <i class="far fa-clock"></i>
                <?php echo date('d/m/Y', $this->showtime); ?>
                <b><?php echo date('H:i', $this->showtime); ?></b> (135 Mins)
                <br>
              </font>

              <font size="4">
                <i class="fas fa-building"></i> THEATRE <?php echo $this->theatre_no; ?> <br>
              </font>
              <br>

              <font size="4"> ที่นั่ง </font>
              <br />
              <?php
                // for ($i=0; $i < count($this->seats); $i++) {
                //   echo json_encode($this->seats);
                //
                // }
                $arry = json_decode(json_encode($this->seats), true);
                foreach ($arry as $result)
                {
                  $seat_no = $result['row'].'-'.$result['seat'];
                  echo "<div class='btn btn-outline-dark btn-sm'><b>$seat_no</b></div>";
                  echo "&nbsp;";  // add a little space
                }
                  //echo json_encode($this->seats);
                  //print_r($this->seats);
              ?>
              <br> <br>
              <!-- <from action = '/kmutt_home' method = 'post'>
    <button type="button" class="btn btn-primary btn-lg btn-danger" >BACK TO HOME</button>
  </from> -->
  </div>
</div>
</div>
</div>
</div>

