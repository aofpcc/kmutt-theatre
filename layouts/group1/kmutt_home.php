<?php  ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSC318Movie - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <style>
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
      </style>



  </head>

  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
   <a class="navbar-brand" href="http://localhost:8000/customer/kmutt_home">KMUTT THEATER</a>
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" href="http://localhost:8000/customer/kmutt_home">home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">promotion</a>
     </li>
   </ul>
  </nav>


    <div class = "container" id="promo-ads">
    <div class="col-lg-12">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/YAgJl12AHInNly31iG0jwemy8nMNWEMJ0nloSIamTMRm2RFkhzsx-tAJuhhqsw-lRGFRp0O8oM8mrlHmwTimvw=w888" width="100%" height="auto"  alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/MVC-TRPxpg4iK9BM-bQ5cMuy_yVKruaVwCgDoJ1Gsj0F7yyWdgBmtyxaEN24WSkY2QaJXDovH4jPRGLvciw=w888" width="100%" height="auto" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/akC5mSFQk3JINWvxia45R-NemWnNP--ktHeAa0HB7xawyYW3Js1wxqDOPvIJrEFwn0aREV7O1UIYzpfAnLnDlw=w888" width="100%" height="auto" walt="Third slide">
          </div>
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
      <nav class="nav nav-pills nav-fill">
          <a class="nav-item nav-link disabled"></a>
          <a class="nav-item nav-link disabled" ></a>
          <a class="nav-item nav-link active" href="#">Now Showing</a>
          <a class="nav-item nav-link" >Coming Soon</a>
          <a class="nav-item nav-link disabled"></a>
          <a class="nav-item nav-link disabled" ></a>
        </nav>
    <hr><br><br>



    <!-- Page Content -->
    <div class = "container" id"Showing">
    <div class="container-fluid">
        <div class="row content">
          <div class="col-sm-9">

          <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>2018-11-15</center></a>
                          </h7>
                          <h5 class="card-text"><center>Fantastic Beasts The Crimes of Grindelwald<center></h5>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/PbOkOCAdbr_QUIkd69e-vyQEGaiQXIpDSVzkcTEti7bgXpGCoFp_RuHzAeUVlLsyB-m0uuFZ9TP5OmFqrrpy=w260" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>2018-10-25</center></a>
                          </h7>
                          <h4 class="card-text"><center>Homestay<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                          <h7 class="card-title" >
                            <a href="#" ><center>Date coming</center></a>
                          </h7>
                          <h4 class="card-text"><center>Movie name<center></h4>
                          </div>
                      </div>
                    </div>
                  </div>
          </div>



        <div class="col-ms-4 sidenav">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-ads" role="listbox">
                <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/2TcqenCtqNlmWs7drIxs97P0pk8LqkdjBIiWcYy83UztcTrKDMCj66cmo0FA70lboACliZg8AVLg0e2Q_4E=w255"   alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/uv4OV-DkL03J8iweShFkznDzWEq3vUxx3mFhcli8jcF6p7kKB3mzM0BnCbWO6NffKb6jHUxQ56a07pEDwJhO=w255"  alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://lh3.googleusercontent.com/hh7__BRUcQmLTVQsdfb0rhQD46t9b_rsl-7lXof1nFRud49GlZcDgliMXNuJCNMqKcTWEiAOmHswpihQ8V2wxQ=w255" walt="Third slide">
              </div>
            </a>
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

  </body>

</html>
