
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">
    <title>KMUTT THEATER</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/48418004_353204675412740_5897908408660525056_n.jpg?_nc_cat=107&_nc_ht=scontent.fbkk10-1.fna&oh=bba43ade3949e4f41505708e94235d4c&oe=5C920917" width="100%" height="auto"  alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="https://scontent.fbkk12-1.fna.fbcdn.net/v/l/t1.15752-9/48368332_435728496963374_3243513792465731584_n.jpg?_nc_cat=106&_nc_ht=scontent.fbkk12-1.fna&oh=c788c72201b4d5a55e6d67005c027d23&oe=5C9C0C9D" width="100%" height="auto" alt="Second slide">
          </div>
          <!-- <div class="carousel-item">
            <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/akC5mSFQk3JINWvxia45R-NemWnNP--ktHeAa0HB7xawyYW3Js1wxqDOPvIJrEFwn0aREV7O1UIYzpfAnLnDlw=w888" width="100%" height="auto" walt="Third slide">
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
