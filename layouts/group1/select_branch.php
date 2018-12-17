  <head>

    <meta charset="utf-8">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">


  </head>

    <!-- Page Content -->
    <div class="main">
    <div class="container">

       <!-- Page Heading  -->
      <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 1</button>
        <small>Choose location</small>
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
        <br><br>

    <div class="card card-temp">
            <div class="container">
                <form action="/customer/kmutt_home/branch/show_time" method="post">
                  <br>
                    <div class="form-group">
                      <label for="sel1">ALL CINEMAS:</label>
                      <select class="form-control" id="sel1">
                        <?php

                          for($i = 0; $i < count($this->query); $i++) {

                        ?>

                        <option value="value <?=$this->query[$i]['BranchName'] ?>">
                          <?=$this->query[$i]['BranchName']  ?></option>

                      <?php } ?>

                      </select>

                    </div>
                    <br>

                      <button type="submit" id = "showtime" class="btn btn-primary btn-lg btn-block" name = "show_time">SHOW TIME</button>
                      <br>

                  </form>
            </div>
          </div>

        </div>
      </div>

    <br><br><br>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>