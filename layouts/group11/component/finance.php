<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Financial</h1>
  </div>
  <div style="margin-center:0 auto"></div>


  <!-- Code finance here -->

  <!-- Button -->
  <?php include('layouts/group11/component/layout/buttons.php'); ?>
  <!-- Button end -->
  <!-- month pickup -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
        </br>
          <label>Start period :</label>
          <input type="text" class="form-control form-control-1 input-sm from col-sm-4" placeholder="Month and year start" >
        </div>

        <div class="form-group">
          <label>End period :</label>
          <input type="text" class="form-control form-control-2 input-sm to col-sm-4" placeholder="Month and year end">
        </div>

        <button type="button" class="btn btn-primary active">Search</button>
      </div>
      <div class="col-sm">
        <div class="container" style="padding-top:30px;">

          <h2>Income <kbd style="background-color:green"> <?php echo ($this->revenue[0]['total']); ?> Bath</kbd></h2>
          <h2>Outcome <kbd style="background-color:red"><?php echo ($this->expenses[0]['total']); ?> Bath</kbd></h2>
          <?php  $profit = $this->revenue[0]['total'] - $this->expenses[0]['total'];
          if ($profit >= 0) { ?>
            <h2>Profit <kbd style="background-color:green"><?php echo ($this->revenue[0]['total']- $this->expenses[0]['total'] ) ;?> Bath</kbd></h2>
          <?php } else {?>
            <h2>Profit <kbd style="background-color:red"><?php echo (($profit)) ?> Bath</kbd></h2>
          <?php }?>
        </div>
      </div>
    </div>
  </div>




  <!-- month pickup ends -->

  <canvas class="my-4 w-100" id="sumChart" width="900" height="380"></canvas>

<!-- Stop here -->
</main>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("sumChart");
  var sumChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["January", "Februry", "March", "April", "May", "June", "July"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      },
      {
        data: [1, 2135, 1883, 2403, 2389, 2092, 1204],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#000000',
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
<!-- Graphs end -->

<!-- month pickup -->
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>

<script type="text/javascript" src="daterangepicker.js"></script>
