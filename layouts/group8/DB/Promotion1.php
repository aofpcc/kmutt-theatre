 <head>
    <title>Promotion List</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="/layouts/group8/DB/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Custom styles for this template -->
    <link href="/layouts/group8/DB/css/3-col-portfolio.css" rel="stylesheet" type="text/css">

  </head>

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">KMUTT Theatre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Movie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Promotion List
        <small>
        <h4 class="card-title">
                <a href="/emp/promotion/add" id="m1">+Add</a><br>
                <a href="/emp/promotion/edit" id="m2">+Edit</a>
              </h4>
        </small>
      </h1>

      <div class="row">
        <?php foreach($this->promotions as $promotion) { ?>
          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src='/groups/group8<?=$promotion["PromoPic"]?>' alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <?=$promotion["PromoName"] ?><br><br><?=$promotion["StartDate"] ?>
                <br><?=$promotion["EndDate"] ?><br><br><?=$promotion["Description"] ?>
                <br><br>CODE = <?=$promotion["PromoCode"] ?><br>one code / person
              </h4>
              <p class="card-text">     </p>
            </div>
          </div>
        </div>
        <?php } ?>
        

        <!-- <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
          <a href="#"><img class="card-img-top" src='/layouts/group8/DB/Pic/<?=$promotion["PromoPic"]?>' alt=""></a>
            <div class="card-body">
            <?=$promotion["PromoName"] ?><br><br><?=$promotion["StartDate"] ?>
                <br><?=$promotion["EndDate"] ?><br><br><?=$promotion["Description"] ?>
                <br><br>CODE = <?=$promotion["PromoCode"] ?><br>one code / person
            </div>
            
          </div>
        </div> -->
        <!-- <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Movie1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/emp/group8M" id="m1">Before 03:00 PM</a>
                
              </h4>
              <p class="card-text">     </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Movie2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/emp/group8M2" >After 03:00 PM</a>
              </h4>
              <p class="card-text">     </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Food1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/emp/group8F">Couple set(Popcorn M + Drink M)</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Food2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/emp/group8F2">Couple set(Popcorn L + Drink L)</a>
              </h4>
              <p class="card-text">    </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/layouts/group8/DB2/Pic/Food3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="group8F3">Family set(Popcorn XL + Drink XL)</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div> -->
       
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
       
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
    </footer> -->

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
