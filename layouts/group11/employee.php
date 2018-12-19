<!-- <!doctype html> -->
<!-- <html lang="en"> -->
  <head>
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <meta name="description" content=""> -->
    <!-- <meta name="author" content=""> -->
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <!-- <title>KMUTT-Theatre-Staff</title> -->

    <!-- Bootstrap core CSS -->
    <!-- <link href="/layouts/group11/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="/layouts/group11/css/dashboard.css" rel="stylesheet">

  </head>
  <!-- <body> -->
    <!-- <div class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/staff/employee">KMUTT-Theatre </a>

         <input class='form-control form-control-dark w-100' type='text' placeholder='Search' aria-label='Search'>
      <div class="form-control form-control-dark w-100" ></div>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/staff/logout">Sign out</a>
        </li>
      </ul>
    </div> -->

    <div class="" style="width: inherit!important;">
      <div class="row">
        <div class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/emp/staff/employee/dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="/emp/staff/employee/profile">
                  <span data-feather="user"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/emp/staff/employee/editprofile">
                  <span data-feather="edit"></span>
                  Edit Profile
                </a>
              </li>            
              <?php 
              if($this->permission[0]['createEmp'] == 1){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/emp/staff/employee/createprofile">';
                echo '  <span data-feather="plus-circle"></span>';
                echo '  create Employee';
                echo '</a>';
                echo '</li>';
              }
              ?>            
              <?php 
              if($this->permission[0]['timestamp'] == 1){
                echo '<li class="nav-item">';
                echo ' <a class="nav-link" href="/emp/staff/employee/timestamp">';
                echo '  <span  data-feather="clock"></span>';
                echo '  Time Stamp';
                echo '</a>';
                echo '</li>';
              }
              ?>
              <?php 
              if($this->permission[0]['finance'] == 1){
                echo '<li class="nav-item">';
                echo ' <a class="nav-link" href="/emp/staff/employee/finance">';
                echo '  <span  data-feather="layers"></span>';
                echo '  Financial';
                echo '</a>';
                echo '</li>';
              }
              ?>
              <li class="nav-item">
              <a class="nav-link" href="/emp/staff/employee/changepass">
                <span data-feather="edit-2"></span>
                Change Password                
              </a>
            </li>  
              <li class="nav-item">
                <a class="nav-link" href="/emp/staff/logout">
                  <span data-feather="power"></span>
                  LOGOUT                 
                </a>
              </li>       

            <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="">
                <span data-feather="plus-circle"></span>
              </a>
            </h6> -->
            <!-- <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul> -->
          </div>
      </div>
        <?php

        $this->partial('layouts/group11/component/'.$this->nameTag);

        // require('layouts/group11/component/'.$this->nameTag);

        ?>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="/layouts/group11/js/jquery-slim.min.js"><\/script>')</script> -->
    <script src="/layouts/group11/js/popper.min.js"></script>
    <!-- <script src="/layouts/group11/js/bootstrap.min.js"></script> -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
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
    </script> -->
  <!-- </body> -->
<!-- </html> -->
