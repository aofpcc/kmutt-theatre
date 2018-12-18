<style media="screen">
  a.inactive {
    pointer-events: none;
  }
</style>

<?php foreach($this->result as $r) { ?>
<div class="card card-temp shadow-sm">
    <!-- <div class="row blue-head">
      <div class="col-xs-12"> -->
        <button type="button" class="btn btn-danger"><center><?=$r["branch_name"]?></center></button>
      </div>
    </div>

    <?php $isFirst = true;
    foreach($r["rooms"] as $room) { ?>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-45">
        <br><br>
        <h3>
          <center><?="THEARE NO ".$room["room_no"].".<br>[".$room["room_name"]."]"?></center>
        </h3>
        <br><br>
      </div>

      <div class="col-md-5">
        <br>
        <h4>ENG</h4>
        <?php foreach($room["movies"] as $movie) { ?>
            <a class="btn <?=$movie["status"] ?>" href="/emp/group2/home_page/select_movie/branch/<?=$movie["id"]?>"><?=$movie["showtime"]?></a>
        <?php } ?>
      </div>
    </div>
    <!-- /.row -->
    <?php } ?>
  </div>
<?php } ?>
