<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
<link href="/layouts/group11/css/editprofile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">New Profile</h1>
      <hr>
    </div>
    
    <div class="emp-profile">          
        <div class="row">
            <form action="/emp/staff/employee/createprofile/save" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src=" " alt=""/>
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
                            <input class="form-control" type="text" name="firstName" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">Last name:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="lastName" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Address:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="address" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Tell:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Tell" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Salary:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Salary" value="" >                         
                            
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Gender:</label>
                            <div class="col-lg-8 edit">
                                <input type="radio" name="gender" value="M" checked> Male<br>
                                <input type="radio" name="gender" value="F"> Female<br>
                            </div>
                        </div>                                               
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Email:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="email" name="Email" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label edit-label">Username:</label>
                            <div class="col-md-8 edit">
                            <input class="form-control" type="text" name="Username" value="" required>
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
                                <select name="Status">
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
        
