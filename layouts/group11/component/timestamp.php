<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
<link href="/layouts/group11/css/editprofile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Timestamp Profile</h1>
    <hr>
  </div>
  <?php date_default_timezone_set("Asia/Bangkok"); 
    $now = $this->monthNow;
  ?>
  <div class="row">
    <form class="form-inline" action="/emp/staff/employee/timestamp" method="post">
      <div class="form-group">
        <label for="sel1">Select Month</label>
        <?php $dt = new DateTime($this->countUser[0]['timeIn']); 
          $month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        ?>
        <select class="form-control" name="month" id="sel1">
          <?php 
            for($i=0; $i <= 6; $i++) {
              if($i != 0) $dt->modify('-1 month');
              if($now === $dt->format('Y-m')) {
                echo '<option selected value="'.$dt->format('Y-m').'">'.$dt->format('Y').' '.$month[intval($dt->format('m')) - 1].'</option>';
              } else {
                echo '<option value="'.$dt->format('Y-m').'">'.$dt->format('Y').' '.$month[intval($dt->format('m')) - 1].'</option>';
              }
            }
          ?>
        </select>
        
      </div>
      <div class="form-group">
        <label for="id">ID : </label>
        <input type="text" class="form-control" name="id" required>
      </div>
      <button id="show_month" type="submit" class="btn btn-primary">Show</button>
    </form>
  </div>
  <br>
  <div class="row">
    <h3>Date : <?php echo substr($now,0,4).' '.$month[intval(substr($now,5)) - 1]; ?></h3>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Time In</th>
            <th>Time Out</th>
            <th>Work Time</th>
            <th>Overtime</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $result = $this->countUser;
          for($i = 0; $i<count($result); $i++){
            $row = $result[$i];
            $datetime1 = new DateTime($row['timeIn']);
            $datetime2 = new DateTime($row['timeOut']);
            $interval = $datetime1->diff($datetime2);
            if($now === $datetime1->format("Y-m")) {
                echo '<tr>';
                echo '<td>'.$row['tmpID'].'</td>';
                echo '<td>'.$row['userID'].'</td>';
                echo '<td>'.$row['timeIn'].'</td>';
                echo '<td>'.$row['timeOut'].'</td>';
                if($interval->h < 10) {
                  echo '<td style="background-color: #ff9191;">ชั่วโมงทำงานไม่ครบ</td>';
                } else {
                  echo '<td style="background-color: #91ffc6;">ชั่วโมงทำงานครบ</td>';
                }
                if($interval->h > 10) {
                  echo '<td>'.($interval->h - 10).' Hour</td>'; 
                } else {
                  echo '<td>0 Hour</td>';
                }
                echo '</tr>';
              }                        
            } 
          ?>                
        </tbody>
      </table>
    </div>
  </div>
</main>