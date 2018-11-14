<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title><?=$this->pageTitle ?></title>
    <link rel="stylesheet" href="/layouts/group3/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/layouts/group3/js/ads.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);
    <?php var_dump() ?>
    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Food and beverage');
      data.addColumn('number', 'Ticket');
      data.addColumn('number', 'Membership');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: 'Income per day',
          subtitle: 'all in come per day'
        },
        width: 500,
        height: 570,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
  </head>
  <body>
    <div name="header" class="head">
      <h1>KMUTT Theatre</h1>
    </div>
    <div name="body" class="main-body">
      <div class="list">
        <h2>Report income</h2>
        <div class="table-scroll">
          <table>
            <thead>
              <tr>
                <th class="list-id">ID</th>
                <th>Department</th>
                <th>Date & Time</th>
                <th>Sold by</th>
                <th>Purchase fy</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php
                for($i = 0; $i < count($this->list); $i++) {
              ?>
                <tr>
                  <td><?=$this->list[$i]['transactionId'] ?></td>
                  <td><?=$this->list[$i]['dName'] ?></td>
                  <td><?=$this->list[$i]['date'] ?></td>
                  <?=
                    $Fname = $this->list[$i]['empFN'];
                    $Lname = $this->list[$i]['empLN'];
                    $name = $Fname." ".$Lname;
                  ?>
                  <td><?=$name?></td>
                  <?=
                    $Fname = $this->list[$i]['memFN'];
                    $Lname = $this->list[$i]['memLN'];
                    $name = $Fname." ".$Lname;
                  ?>
                  <td><?=$name?></td>
                  <td><?=$this->list[$i]['amount'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="chart">
        <div id="line_top_x"></div>
      </div>
    </div>
  </body>
</html>
