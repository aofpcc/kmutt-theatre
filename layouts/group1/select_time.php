<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
   <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">

   <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="http://localhost:8000/customer/kmutt_home">KMUTT THEATER</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="http://localhost:8000/customer/kmutt_home">home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">promotion</a>
    </li>
  </ul>
</nav> -->

  <div class="main">
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4"><button type="button" class="btn btn-danger">STEP 2</button>
        <small>Select Showtime</small>
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
                    <br><br><br><br>
                    <h4>Fantastic Beasts The Crimes of Grindelwald</h4>
                    <h7>Genre: Fantasy</h7><br>
                    <h7>Rate: G</h7><br>
                    <h7>135 Mins</h7><br><br>
                    <!-- <button type="button" class="btn btn-lg btn-default">MOVIE DETAIL</button> -->
                  </div>
              </div>
          </div>
        </div>
        <br><br><hr>

        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="#">Thu<br><small>15 Nov 2018</small></a>
            <a class="nav-item nav-link" href="#">Fri<br><small>16 Nov 2018</small></a>
            <a class="nav-item nav-link" href="#">Sat<br><small>17 Nov 2018</small></a>
            <a class="nav-item nav-link disabled" href="#">Mon<br><small>18 Nov 2018</small></a>
            <a class="nav-item nav-link disabled" href="#">Tue<br><small>19 Nov 2018</small></a>
          </nav><hr>

        <div class="card card-temp">
          <div class="container">
              <form>
                <br>
                  <div class="form-group">
                    <label for="sel1">SELECT DATE </label><br>
                    <select class="form-control" id="sel1">
                      <?php
                        //for($i = 0; $i < count($this->query); $i++) {
                      ?>
                      <!-- <option value="value <?//=$this->query[$i]['BranchName'] ?>">
                        <?//= $this->query[$i]['BranchName']  ?></option> -->
                    <?php //} ?>
                      <?php
                        for($i = 0; $i < count($this->query_date); $i++) {
                      ?>
                      <option value="value <?=$this->query_date[$i]['date(startTime)'] ?>">
                        <?= $this->query_date[$i]['date(startTime)']  ?></option>
                    <?php } ?>
                    </select>
                  </div>



      <!-- Project One -->
      <div class="card card-temp shadow-sm">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <br><br>
            <h4><center>THEATER 1</center></h4>
            <center><img class="img-fluid rounded mb-3 mb-md-0" src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/122015/untitled-1_31.png?itok=lrK--dNU" alt=""></center>
          </a>
        </div>
        <div class="col-md-5">
            <br><br>
          <h4>ENG</h4>
          <?php
              for ($i=0; $i < count($this->query_time); $i++) {
          ?>
              <button type="button" class="btn btn-danger" name ="movie_time" style="margin: 1%!important">
                <?=$this->query_time[$i]['time_movie'] ?></button>
          <?php
              }
            ?>
        </div>


        <div class="col-lg-4 col-md-6 mb-4">
          <hr>
            <br><br>
            <h4><center>THEATER 2</center></h4>
            <center><img class="img-fluid rounded mb-3 mb-md-0" src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/122015/untitled-1_31.png?itok=lrK--dNU" alt=""></center>
        </div>
        <div class="col-md-5">
          <hr>
            <br><br>
          <h4>ENG</h4>

        </div>

      </div>
  </div>

  <!-- Project Two -->
  <!-- <div class="row">
      <div class="col-lg-4 col-md-6 mb-45">
          <br><br>
          <h3><center>Digital Cinema</center></h3>
          <br><br>
        </div> -->

    <!-- <div class="col-md-5">
        <br>
      <h4>TH</h4>
      <a class="btn btn-outline-primary" href="#">15:00</a>
      <a class="btn btn-outline-primary" href="#">17:45</a>
      <a class="btn btn-outline-primary" href="#">21:15</a>

    </div> -->
  </div>
  <!-- /.row -->
  </div>
</div>

</div>
