<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div> -->
          </div>

          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

          <h2>EMPLOYEE</h2>
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
              <tbody>              
                <?php
                  $result = $this->employee;
                  for($i = 0; $i<count($result); $i++){
                    $row = $result[$i];
                    echo '<tr>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Firstname'].'</td>';
                    echo '<td>'.$row['Lastname'].'</td>';
                    echo '<td>'.$row['Salary'].'</td>';
                    echo '<td>'.$row['Tell'].'</td>';      
                    echo '</tr>';
                  } 
                ?>                
              </tbody>
            </table>
          </div>
        </main>