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

<!-- Page Content -->
<div class = "main">

  <!-- Page Heading -->
  <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 1</button>
    <small style="font-weight:bold">Select Showtime</small>
  </h1>

  <div class="card card-temp shadow-lg">
    <div class="container">

      <br>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?=$this->image ?>"
                alt=""></a>
          </div>
        </div>
        <div class="col-md-7">
          <br><br><br><br>
          <font size = "5" style="font-weight:bold"> Movie Name: <?=$this->title ?></font><br><br>
          <font size = "5">Genre: <?=$this->genre ?></font><br>
          <!-- <font size = "5">Rate: G</font><br> -->
          <font size = "5">Length: <?=$this->length ?></font><br>
          <font size = "5">Detail : <?=$this->detail ?></font><br><br>
          <?php
// var_dump($this->details["datail"]);
// die;
           ?>
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
    <?php
    if(count($this->query) != 0) {
    foreach($this->query as $q) { ?>
      <a class="btn-dark nav-item nav-link <?=$q["status"]?>" href="/customer/group14/showtime/all/<?=$this->movie_id?>/<?=$q["value"]?>/<?=$this->branch_id?>"><?=$q["date"] ?><br><small><?=$q["str"] ?></small></a>
    <?php }
      }else{
      echo "No any showtime";
    } ?>
  </nav>
  <hr>
  <!-- Project One -->
  <!-- OverHere -->
  <div id="showtime"></div>

</div>

<br><br><br>
<!-- Footer -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script>
  $(document).ready(function(){
    var movie_id = "<?=$this->movie_id?>";
    var branch_id = "<?=$this->branch_id?>";
    var date = "<?=$this->datenow?>";
    if(<?=count($this->query) == 0? "false" : "true" ?>){
      $.get("/customer/group14/showtime/all/"+movie_id+"/"+date+"/"+branch_id).done(function(data){
        $("#showtime").html(data);
        // alert('fnjoldjskfndjsk');
      });
    }
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
