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


      <div class="col-lg-6" style="padding-top:60px;">
        <div class="row">
          <div class="col-lg-6">
            <label>Start period :</label>
            <input id="date_from" type="date" class="form-control" placeholder="Month and year start" >
          </div>
          <div class="col-lg-6">
            <label>End period :</label>
            <input id="date_to" type="date" class="form-control" placeholder="Month and year end">
          </div>
        </div>
        <br>
        <button id="search_graph" type="button" class="btn btn-primary active">Search</button>
        <button id="refesh_page" type="button" class="btn btn-primary active">Reset</button>
      </div>
      <div class="col-lg-6">
        <div style="width: inherit!important; min-width: 500px;" class="container" style="padding-top:30px;">

          <h2>Revenue <kbd id="revenue" style="background-color:green"> <?php echo ($this->revenue[0]['0']); ?> Bath</kbd></h2>
          <h2>Expense <kbd id="expense" style="background-color:red"><?php echo ($this->expenses[0]['0']); ?> Bath</kbd></h2>
          <?php  $profit = $this->revenue[0]['total'] - $this->expenses[0]['0'];?>
          <h2>Profit <kbd id="profit"><?php echo (($profit)) ;?> Bath</kbd></h2>
        </div>
      </div>

    </div>
  </div>


  <!-- month pickup ends -->
  <div class="container" style="width: inherit!important; min-w`idth: 500px; padding-top:50px; padding-bottom:50px;">
    <div class="row">
      <div class="col-lg-12">
        <canvas class="my-4 w-50" id="sumChart" width="500" height="250"></canvas>
      </div>
    </div>
  </div>


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
<script>
$("#search_graph").click(function(){
  var startDate = $("#date_from").val();
  var endDate = $("#date_to").val();
  var obj = {startDate, endDate};
  console.log(obj);
  $.post("/emp/staff/finance/test", obj).done(function(data){
    console.log(data);
    var revenue = data.revenue.total;
    var expenses = data.expenses.total;
    $("#revenue").text(revenue);
    $("#expense").text(expenses);
    var profit = revenue - expenses;
    $("#profit").text(profit);
  });
});
</script>
