 <head>
    <title>Promotion List</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="/layouts/group8/DB/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Custom styles for this template -->
    <link href="/layouts/group8/DB/css/3-col-portfolio.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="/layouts/group8/DB/css/bootstrap.min.css" rel="stylesheet">

    <link href="/layouts/group8/DB/css/small-business.css" rel="stylesheet">
    <style>

p.solid {border-style: solid;}

p.groove {border-style: groove;}
p.double {border-style: double;}p.ridge {border-style: ridge;}
p.inset {border-style: inset;}
p.outset {border-style: outset;}
p.none {border-style: none;}
p.hidden {border-style: hidden;}
p.mix {border-style: dotted dashed solid double;}
.portfolio-item {
  border: 1px solid gray;
}
.card-img-top {
  max-height: 300px;
  max-width: 245px;
  height: auto;
  width: auto;
}
</style>
    
    

  </head>
  <body>
    <!-- Page Content -->
    <div class="container">
      

      <!-- Page Heading -->
      <h1 class="my-4">
        Promotion List
        <small>
          <h4 class="card-title">
            <br>
            <button onclick = "location.href = '/emp/group8/search'" type="button" class="btn btn-secondary btn-lg">Search Promotion</button>
            <button onclick = "location.href = '/emp/promotion/add'" type="button" class="btn btn-danger" id="m1">+Add</button></a>

          </h4>
        </small>
      </h1>

      <div class="row">
        <?php foreach($this->promotions as $promotion) { ?> 
          <div class="col-lg-3 col-sm-4 portfolio-item">
            <div class="card h-100"><br>
              <a href="#"><img  height="400px" class="card-img-top" src='/groups/group8<?=$promotion["PromoPic"]?>' alt=""/></a>
              <div class="card-body">
                <h4 class="card-title">
                <h6>Promotion name</h6>
                  <?=$promotion["PromoName"] ?>
                  <br><br><h6>start-end time</h6>
                  <?=$promotion["StartDate"] ?>
                  <br>
                  <?=$promotion["EndDate"] ?>
                  <br><br><h6>Description</h6>
                  <?=$promotion["Description"] ?>
                  <br><br>
                  <h6>Discount</h6><?=$promotion["Discount"] ?>
                  <br><br>
                  <h6>Code</h6><?=$promotion["PromoCode"] ?>
                  <br><br>
                  <h6>Point</h6><?=$promotion["PointUsed"] ?><br>
                  <button type="button" class="btn btn-success" onClick="location.href='/emp/promotion/edit/<?=$promotion["PromoID"]?>';">Edit</button>
                  <button type="button" class="btn btn-danger" onClick="location.href='/promotion/<?php ?>/<?php echo $this->promotions["PromoID"]; ?>';">Use Point</button>
                </h4>
                <p class="card-text">     </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

      
       
      <!-- </div> -->
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
</body>