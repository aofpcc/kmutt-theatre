<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><br>Revenue</h1>
  </div>
  <div style="margin-center:0 auto"></div>
  <!-- Code finance here -->

  <!-- Button -->
  <?php include('layouts/group11/component/layout/buttons.php'); ?>
  <!-- Button ends -->

  <canvas class="my-4 w-100" id="revChart" width="900" height="380"></canvas>
  <h2>Revenue list</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Status</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Salary</th>
          <th>Call</th>
        </tr>
      </thead>
      <?php  if (count($this->list)>=1) { ?>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1"
          aria-expanded="false" aria-controls="group-of-rows-1">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td><b><?=$this->list[0]['dName']?></b></td>
            	<td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td><?=$this->list[0]['total']?></td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-1" class="collapse">
        <?php
         $wanT = array();
         while($row = mysqli_fetch_assoc($this->revenueDate)){
         $wanT[] = $row;
        }
         $json = json_encode($wanT);
         echo "<div id='wanT' style='display:none;'> " . $json . "</div>";
        ?>
        <?php
         $korMoon = array();
         while($row = mysqli_fetch_assoc($this->revenueGrahp)){
          $korMoon[] = $row;
        }
         $json = json_encode($korMoon);
         echo "<div id='korMoon' style='display:none;'> " . $json . "</div>";
        ?>
        <?php
          for($j = 0; $j < count($this->revenueList); $j++) {
            if ($this->list[0]['dName'] == $this->revenueList[$j]['dName'] ) {
        ?>
          <tr><!-- this is when collapse bind all data in each department here -->

                <td><?=$this->revenueList[$j]['transactionId'] ?></td>
                <td><?=$this->revenueList[$j]['dName'] ?></td>
                <td><?=$this->revenueList[$j]['date'] ?></td>
                <td><?=$this->revenueList[$j]['empFN']." ".$this->revenueList[$j]['empLN']?></td>
                <td><?=$this->revenueList[$j]['memFN']." ".$this->revenueList[$j]['memLN'];?></td>
                <td><?=$this->revenueList[$j]['amount'] ?></td>

              <?php
                  }
              ?>
              <?php } ?>
          </tr>
      </tbody>
    <?php  } if (count($this->list)>=2) { ?>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-2"
          aria-expanded="false" aria-controls="group-of-rows-2">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td><b><?=$this->list[1]['dName']?></b></td>
            	<td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td><?=$this->list[1]['total']?></td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-2" class="collapse">
        <?php
          for($j = 0; $j < count($this->revenueList); $j++) {
            if ($this->list[1]['dName'] == $this->revenueList[$j]['dName'] ) {
        ?>
          <tr><!-- this is when collapse bind all data in each department here -->

                <td><?=$this->revenueList[$j]['transactionId'] ?></td>
                <td><?=$this->revenueList[$j]['dName'] ?></td>
                <td><?=$this->revenueList[$j]['date'] ?></td>
                <td><?=$this->revenueList[$j]['empFN']." ".$this->revenueList[$j]['empLN']?></td>
                <td><?=$this->revenueList[$j]['memFN']." ".$this->revenueList[$j]['memLN'];?></td>
                <td><?=$this->revenueList[$j]['amount'] ?></td>

              <?php
                  }
              ?>
              <?php } ?>
              <br>
          </tr>
      </tbody>
    <?php  } if (count($this->list)>=3) { ?>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-3"
          aria-expanded="false" aria-controls="group-of-rows-3">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td><b><?=$this->list[2]['dName']?></b></td>
            	<td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td><?=$this->list[2]['total']?></td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-3" class="collapse">
        <?php
          for($j = 0; $j < count($this->revenueList); $j++) {
            if ($this->list[2]['dName'] == $this->revenueList[$j]['dName'] ) {
        ?>
          <tr><!-- this is when collapse bind all data in each department here -->

                <td><?=$this->revenueList[$j]['transactionId'] ?></td>
                <td><?=$this->revenueList[$j]['dName'] ?></td>
                <td><?=$this->revenueList[$j]['date'] ?></td>
                <td><?=$this->revenueList[$j]['empFN']." ".$this->revenueList[$j]['empLN']?></td>
                <td><?=$this->revenueList[$j]['memFN']." ".$this->revenueList[$j]['memLN'];?></td>
                <td><?=$this->revenueList[$j]['amount'] ?></td>

              <?php
                  }
              ?>
              <?php } ?>
          </tr>
      </tbody>
      <?php  } if (count($this->list)>=4) { ?>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-4"
          aria-expanded="false" aria-controls="group-of-rows-4">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td><b><?=$this->list[3]['dName']?></b></td>
             <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td><?=$this->list[3]['total']?></td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-4" class="collapse">
        <?php
          for($j = 0; $j < count($this->revenueList); $j++) {
            if ($this->list[3]['dName'] == $this->revenueList[$j]['dName'] ) {
        ?>
          <tr><!-- this is when collapse bind all data in each department here -->

                <td><?=$this->revenueList[$j]['transactionId'] ?></td>
                <td><?=$this->revenueList[$j]['dName'] ?></td>
                <td><?=$this->revenueList[$j]['date'] ?></td>
                <td><?=$this->revenueList[$j]['empFN']." ".$this->revenueList[$j]['empLN']?></td>
                <td><?=$this->revenueList[$j]['memFN']." ".$this->revenueList[$j]['memLN'];?></td>
                <td><?=$this->revenueList[$j]['amount'] ?></td>

              <?php
                  }
              ?>
              <?php } ?>
          </tr>
      </tbody>
    <?php  } if (count($this->list)>=5) { ?>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-5"
          aria-expanded="false" aria-controls="group-of-rows-5">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td><b><?=$this->list[4]['dName']?></b></td>
            	<td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td><?=$this->list[4]['total']?></td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-5" class="collapse">
        <?php
          for($j = 0; $j < count($this->revenueList); $j++) {
            if ($this->list[4]['dName'] == $this->revenueList[$j]['dName'] ) {
        ?>
          <tr><!-- this is when collapse bind all data in each department here -->

                <td><?=$this->revenueList[$j]['transactionId'] ?></td>
                <td><?=$this->revenueList[$j]['dName'] ?></td>
                <td><?=$this->revenueList[$j]['date'] ?></td>
                <td><?=$this->revenueList[$j]['empFN']." ".$this->revenueList[$j]['empLN']?></td>
                <td><?=$this->revenueList[$j]['memFN']." ".$this->revenueList[$j]['memLN'];?></td>
                <td><?=$this->revenueList[$j]['amount'] ?></td>

              <?php
                  }
              ?>
              <?php } ?>
          </tr>
      </tbody>
      <?php  } ?>
    </table>
</div>

<!-- Stop here -->
</main>

<style>
/* fix = code from bootstrap 3 */
tbody.collapse.in {
  display: table-row-group;
}
</style>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("revChart");
  var dates = JSON.parse(document.getElementById('wanT').innerHTML);
  var datas = JSON.parse(document.getElementById('korMoon').innerHTML);
  var revChart = new Chart(ctx, {
    type: 'line',
    data: {
      //labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      labels: dates,
      datasets: [{
        //data: [1, 21345, 18483, 24003, 23489, 24092, 12034],
        data: datas,
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
