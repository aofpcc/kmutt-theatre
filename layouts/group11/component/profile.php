<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Profile</h1>
      <hr>
    </div>

  <div class="emp-profile">          
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                      <img src="
                        <?php 
                                $pic = $this->picture;
                                echo '/'.$pic[0]['parth'];                                   
                        ?>
                      " alt=""/>                     
                  </div>
            </div>
            <div class="col-md-6">
                   <div class="profile-head">
                      <h5> 
                <?php
                $name = $this->profile;
                //   for($i = 0; $i<count($result); $i++){
                //     $row = $result[$i];
                //     echo $row['Firstname'];
                //     echo('&nbsp;');
                //     echo $row['Lastname'];
                //   } 
                  echo $name[0]['Firstname'];
                  echo('&nbsp;');
                  echo $name[0]['Lastname'];
                ?>
                      
                      </h5>
                      <h6> 
                        <?php 
                            $Profession = $this->profile;
                            echo $Profession[0]['Status'];                                        
                        ?>
                      </h6>
                                    
                     <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                           <li><a data-toggle="tab" href="#menu1">About</a></li>
                     </ul>
                        </div>
                        <!-- asdasdasdsa -->
                        <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">                               
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Name</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                            $name = $this->profile;
                                            echo $name[0]['Firstname'];
                                            echo('&nbsp;');
                                            echo $name[0]['Lastname'];
                                        ?>
                                       </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Email</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                      <?php 
                                            $email = $this->profile;
                                            echo $email[0]['Email'];                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Phone</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                            $phone = $this->profile;
                                            echo $phone[0]['Tell'];                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>gender</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                            $sex = $this->profile;
                                            if($sex[0]['Sex'] =='M'){
                                                echo ('MALE');      
                                            }else
                                                echo ('FEMALE');                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Profession</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                                $department = $this->department;
                                                echo $department[0]['Profession'];                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Salary</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                                $profile = $this->profile;
                                                echo $profile[0]['Salary'].'฿';                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                    <div class="row">
                                  <div class="col-md-6">
                                      <label>Experience</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                                $department = $this->department;
                                                echo $department[0]['experience'];                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>O.T. Rate</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                         <?php 
                                                $department = $this->department;
                                                echo $department[0]['ot_rate'].'฿/hr';                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>                           
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>English Level</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>
                                        <?php 
                                                $department = $this->department;
                                                echo $department[0]['eng_lv'];                                        
                                        ?>
                                      </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Availability</label>
                                  </div>
                                  <div class="col-md-6">
                                    <p>
                                      <?php 
                                                $depTime = $this->depTime;
                                                echo $depTime[0]['time'].'years';                                        
                                        ?>
                                    </p>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label>Branch</label>
                                  </div>
                                  <div class="col-md-6">
                                    <p>
                                      <?php 
                                                $Branch = $this->Branch;
                                                echo $Branch[0]['BranchName'];                                        
                                        ?>
                                    </p>
                                  </div>
                              </div>
            </div> 
      </div>                           
  </div>        
</main>
        
