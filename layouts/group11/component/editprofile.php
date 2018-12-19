<head>
<link href="/layouts/group11/css/profile.css" rel="stylesheet">
<link href="/layouts/group11/css/editprofile.css" rel="stylesheet">
</head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Profile</h1>
      <hr>
    </div>
    
    <div class="emp-profile">          
        <div class="row">
            <form action="/emp/staff/employee/editprofile/save" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="
                            <?php 
                                    $pic = $this->picture;
                                    echo '/'.$pic[0]['parth'];                                   
                            ?>
                        " alt=""/>
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
                                    $name = $this->profile;
                                    echo $name[0]['Firstname'];                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">Last name:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="lastName" value=
                                <?php 
                                    $name = $this->profile;
                                    echo $name[0]['Lastname'];                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">Tell:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="tell" value=
                                <?php 
                                    $name = $this->profile;
                                    echo $name[0]['Tell'];                                   
                                ?>
                            >
                            </div>
                        </div>                   
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit-label">Email:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="text" name="Email" value=
                                <?php 
                                    $name = $this->profile;
                                    echo $name[0]['Email'];                                   
                                ?>
                            >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label edit-label">Username:</label>
                            <div class="col-md-8 edit">
                            <input class="form-control" type="text" name="Username" value=
                                <?php 
                                    $user = $this->userName;
                                    echo $user[0]['username'];                                   
                                ?>
                            >
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
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8 edit">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <a class="btn btn-default" href="/emp/staff/employee/profile">Cancel</a>
                            </div>
                        </div>
                </div>
            </form>  
        </div>                           
    </div>            
     
</main>
        
