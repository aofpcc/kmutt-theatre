<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
           
            <hr>
          </div>
         
          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

          <h2>EMPLOYEE</h2>                  
              <form class="form-inline" action="/emp/staff/employee/dashboard/search" method="post">
                <div class="form-group mx-sm-3 mb-2" action="/emp/staff/employee/editemp/save" method="post">
                  <input type="text" class="form-control" name = "tell" id="tell" placeholder="SEARCH">
                </div>
                <button type="submit" class="btn btn-primary mb-2">SEARCH</button>
            </form>                               
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Status</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Call</th>
                  <?php
                   if($this->permission[0]['finance'] == 1){
                    echo ' <th></th>';
                    } 
                  ?>                 
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
                    echo '<td>'.$row['Email'].'</td>';
                    echo '<td>'.$row['Tell'].'</td>';
                    if($this->permission[0]['finance'] == 1){
                    echo '<td><a href ="/emp/staff/employee/editemp/'.$row['userID'].'">edit</a></td>';
                    }  
                    echo '</tr>';                        
                  } 
                ?>                           
              </tbody>
            </table>
          </div>
        </main>