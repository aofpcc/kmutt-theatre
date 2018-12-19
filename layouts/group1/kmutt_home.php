
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
    <title>KMUTT THEATER</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- <style>
    body{
      background-color: #303030;
      }
      .main{
        width: 80%;
        margin: 45px auto;
        background:rgba(255, 255, 255, 0.88);
        padding: 30px 30px;
      }
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
          background-color: #ffffff;
          height: auto;
        }
        .footer-bt {
          right: 0;
          bottom: 0;
          left: 0;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }
          .row.content {height: auto;}
        }
      </style> -->



  </head>


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
    <?php include("layouts/group10/test_ads/index.php");  ?>


    <div class="main">
    <div class = "container" id="promo-ads">
    <div class="col-lg-12">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/groups/group8<?=$this->sql[0]['PromoPic']?>">
    </div>
    <?php  foreach($this->sql as $sqls) {?>
    <div class="carousel-item">
      <img class="d-block w-100" src="/groups/group8<?=$sqls['PromoPic']?>">
    </div>
    <?php } ?>
  </div>
</div>
  </div>
    </div>



    <br><br><br>

    <div class = "container" id = "movies">
      <h1><center>MOVIES</center></h1>
      <!-- <nav class="nav nav-pills nav-fill">
          <a class="nav-item nav-link disabled"></a>
          <a class="nav-item nav-link disabled" ></a>
          <a class="nav-item nav-link" href="#">Now Showing</a>
          <a class="nav-item nav-link" href="#">Coming Soon</a>
          <a class="nav-item nav-link disabled"></a>
          <a class="nav-item nav-link disabled" ></a>
        </nav> -->
    <hr><br><br>



    <!-- Page Content -->
    <div class = "container" id"Showing">
    <div class="container-fluid">
        <div class="row content">
          <div class="col-sm-12">
          <div class="row">
            <?php foreach($this->movies as $movie) { ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="/customer/kmutt_home/map/<?=$movie["id"]?>"><img class="card-img-top"  src="<?=$movie["Image"] ?>" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="/customer/kmutt_home/map/<?=$movie["id"]?>" ><center><?=$movie["title"] ?></center></a>
                          </h7>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
          </div>



        <div class="col-ms-4 sidenav">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>


            </a>
          </div>
        </div>
        </div>
  </div>
</div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
