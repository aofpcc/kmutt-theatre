<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Revenue</h1>
  </div>
  <div style="margin-center:0 auto"></div>
  <!-- Code finance here -->

  <!-- Button -->
  <?php include('layouts/group11/component/layout/buttons.php'); ?>
  <!-- Button ends -->

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
  <h2>Revenue list</h2>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
          <tr>
            <th>No.</th>
            <th>Department</th>
            <th>Date&Time</th>
            <th>Sold by</th>
            <th>Purchase By</th>
            <th>Amount</th>
          </tr>
      </thead>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1"
          aria-expanded="false" aria-controls="group-of-rows-1">
              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td>data</td>
            	<td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td>Amount</td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-1" class="collapse">
          <tr><!-- this is when collapse bind all data in each department here -->
              <td>1</td>
              <td>data 1</td>
            	<td>data 1</td>
              <td>data 1</td>
            	<td>data 1</td>
              <td>data 1</td>

          </tr>
      </tbody>
      <tbody>
          <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-2"
          aria-expanded="false" aria-controls="group-of-rows-2">

              <td><i class="fas fa-plus"></i></td> <!-- not bind data here-->
              <td>data</td>
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td></td> <!-- not bind data here-->
              <td>Amount</td>
          </tr>
      </tbody>
      <tbody id="group-of-rows-2" class="collapse">
          <tr>
            <td>1</td>
            <td>data 1</td>
            <td>data 1</td>
            <td>data 1</td>
            <td>data 1</td>
            <td>data 1</td>
          </tr>
      </tbody>
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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">