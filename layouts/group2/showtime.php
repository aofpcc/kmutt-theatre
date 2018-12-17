<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Showing Time - Movie</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/1-col-portfolio.css" rel="stylesheet">
  <link rel="stylesheet" href="/layouts/group1/css/showtime.css">
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">

</head>

<div class = "main">

  <!-- Page Heading -->
  <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 1</button>
    <small>Select Showtime</small>
  </h1>

  <div class="card card-temp shadow-lg">
    <div class="container">

      <br>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260"
                alt=""></a>
          </div>
        </div>
        <div class="col-md-8">
          <br><br><br><br>
          <h4>Movie Name: <?=$this->name["title"] ?></h4>
          <h7>Genre: Fantasy</h7><br>
          <h7>Rate: G</h7><br>
          <h7>135 Mins</h7><br><br>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <hr>


  <nav class="nav nav-pills nav-fill btn-dark" id="movie-links">
    <!-- <a class="nav-item nav-link active" href="#">Thu<br><small>15 Nov 2018</small></a>
    <a class="nav-item nav-link" href="#">Fri<br><small>16 Nov 2018</small></a>
    <a class="nav-item nav-link" href="#">Sat<br><small>17 Nov 2018</small></a>
    <a class="nav-item nav-link disabled" href="#">Mon<br><small>18 Nov 2018</small></a>
    <a class="nav-item nav-link disabled" href="#">Tue<br><small>19 Nov 2018</small></a> -->
    <?php foreach($this->query as $q) { ?>
      <a class="btn-dark nav-item nav-link <?=$q["status"]?>" href="/customer/movies/showtime/all/<?=$this->movie_id?>/<?=$q["value"]?>"><?=$q["date"] ?><br><small><?=$q["str"] ?></small></a>
    <?php } ?>
  </nav>
  <hr>
  <!-- Project One -->
  <!-- OverHere -->
  <div id="showtime"></div>

</div>




<script src="vendor/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function(){
    var movie_id = "<?=$this->movie_id?>";
    var date = "<?=$this->datenow?>";
    $.get("/customer/movies/showtime/all/"+movie_id+"/"+date).done(function(data){
      $("#showtime").html(data);
    });
  });

  function openLink(e){
    $.get(e).done(function(data){
      $("#showtime").html(data);
    });
  }

  function newActive(e){
    console.log(e);
    $.each( $("#movie-links > a"), function(k, v) {
      $(v).removeClass('active');
    });
    $(e).addClass('active');
  }

  $("#movie-links > a").click(function(e) {
    // Prevent a page reload when a link is pressed
    e.preventDefault();
    // Call the scroll function
    openLink(this.href);
    newActive(this);
});
</script>