<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
<link href="/layouts/group11/css/editprofile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Empolyee</h1>
      <hr>
    </div>
    <div class="emp-profile">          
        <div class="row">
            <form action="/emp/staff/employee/editemp/save" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">First name:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" name="firstName" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo $employee[0]['Firstname'];                                   
                                ?>
                            >                         
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">Last name:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="lastName" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo $employee[0]['Lastname'];                                   
                                ?>
                            >
                            <input type="hidden" name="userID" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo $employee[0]['userID'];                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Address:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="address" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo '"'.$employee[0]['Address'].'"';                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Tell:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Tell" value=
                            <?php 
                                    $employee = $this->employee;
                                    echo '"'.$employee[0]['Tell'].'"';                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Salary:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Salary" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo '"'.$employee[0]['Salary'].'"';                                   
                                ?>
                            >                         
                            
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Gender:</label>
                            <div class="col-lg-8 edit">
                            <?php 
                                    $employee = $this->employee;
                                    if($employee[0]['Sex']=='M'){
                                        echo'<input type="radio" name="gender" value="M" checked> Male<br>';
                                        echo'<input type="radio" name="gender" value="F"> Female<br>';   
                                    }else{
                                        echo'<input type="radio" name="gender" value="M"> Male<br>';
                                        echo'<input type="radio" name="gender" value="F" checked> Female<br>';   
                                    }                               
                                ?>                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Profession:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Profession" value=
                            <?php 
                                    $department = $this->department;
                                    echo '"'.$department[0]['Profession'].'"';                                   
                            ?> 
                            required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">experience:</label>
                            <div class="col-lg-8 edit">
                            <select class="form-control" name="experience">
                                <option value="Entry Level">Entry Level</option>   
                                <option value="Mid Level">Mid Level</option>  
                                <option value="Senior Level">Senior Level</option>                                             
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">O.T. rate:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="ot_rate" value=
                            <?php 
                                    $department = $this->department;
                                    echo '"'.$department[0]['ot_rate'].'"';                                   
                            ?> 
                            required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">English Level:</label>
                            <div class="col-lg-8 edit">
                            <select class="form-control" name="eng_lv">
                                <option value="Entry Level">Entry Level</option>   
                                <option value="Mid Level">Mid Level</option>  
                                <option value="Senior Level">Senior Level</option>                                                 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">work date:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="date" name="availability" value=
                                <?php 
                                    $department = $this->department;
                                    echo '"'.$department[0]['availability'].'"';                                   
                            ?> 
                            required>
                            </div>
                        </div>                                               
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Email:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="email" name="Email" value=
                                <?php 
                                    $employee = $this->employee;
                                    echo '"'.$employee[0]['Email'].'"';                                   
                                ?>
                            required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label edit-label">Username:</label>
                            <div class="col-md-8 edit">
                            <input class="form-control" type="text" name="Username" value=
                                <?php 
                                    $userName = $this->userName;
                                    echo '"'.$userName[0]['username'].'"';                                   
                                ?>
                            required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label edit-label">Password:</label>
                            <div class="col-md-8 edit">
                            <input class="form-control" type="password" name="password" placeholder="******" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label edit-label">Confirm password:</label>
                            <div class="col-md-8 edit">
                            <input class="form-control" type="password" name="confirmpassword" placeholder="******" required>
                                <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                                    <?php echo $this->error; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Status:</label>
                            <div class="col-lg-8 edit">
                                <select class="form-control" name="Status">
                                    <?php
                                        $result = $this->showstatus;
                                        for($i = 0; $i<count($result); $i++){
                                            $row = $result[$i];
                                            echo '<option value='.$row['statusEmp'].'>'.$row['statusEmp'].'</option>';                                      
                                        } 
                                    ?>
                                </select>
                               
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8 edit">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <a class="btn btn-default" href="/emp/staff/employee/dashboard">Cancel</a>
                            </div>
                        </div>
                </div>
            </form>  
        </div>                           
    </div>                               
     
</main>
        
