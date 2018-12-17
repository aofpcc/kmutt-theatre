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
          <h4>Fantastic Beasts The Crimes of Grindelwald</h4>
          <h7>Genre: Fantasy</h7><br>
          <h7>Rate: G</h7><br>
          <h7>135 Mins</h7><br><br>
          <button type="button" class="btn btn-lg btn-default">MOVIE DETAIL</button>
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
      <a class="btn-dark nav-item nav-link <?=$q["status"]?>" href="/emp/group2/home_page/select_movie/select_time/select_seat/all/<?=$this->movie_id?>/<?=$q["value"]?>"><?=$q["date"] ?><br><small><?=$q["str"] ?></small></a>
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
    $.get("/emp/group2/home_page/select_movie/select_time/select_seat/all/"+movie_id+"/"+date).done(function(data){
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