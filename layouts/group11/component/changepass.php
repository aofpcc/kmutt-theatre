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
            <form action="/emp/staff/employee/changepass/save" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">newpassword:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="password" name="newpassword" value= "">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label edit">confirmpassword:</label>
                            <div class="col-lg-8 edit">
                            <input class="form-control" type="password" name="confirmpassword" value= "">
                            </div>
                        </div>
                        <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                                    <?php echo $this->error; ?>
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
        
