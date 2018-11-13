<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPDATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">CS-18</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container text-center">
        <h1>Update Movie</h1>      
        <p>Welcome!!</p>
      </div>
    </div>

    <div class="container text-center">
      <button onclick = "location.href = '/group9'" type="button" class="btn btn-primary btn-lg">Home</button>
      <button onclick = "location.href = '/group9/add'" type="button" class="btn btn-secondary btn-lg">Add Movie</button>
      <button onclick = "location.href = '/group9/search'" type="button" class="btn btn-success btn-lg">Search Movie</button>
      <button type="button" class="btn btn-danger btn-lg">Delete Movie</button>
    </div>
    <br>
    <div class="container">
  <?php echo $this->sqlResult; ?>
        <form action = "/group9/action/update" method="POST">
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="id" placeholder="Name" value="<?php echo $this->id; ?>" required disabled>
                </div>
                <input type="hidden" name="id" value="<?=$this->id ?>">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Title</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Name" value="<?php echo $this->name; ?>" required>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlInput1">Language</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="lang">
                    <option>EN</option>
                    <option>TH</option>
                        </select>
                      </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Gerne</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="Gerne">
                    <option>Action</option>
                    <option>Adult</option>
                    <option>18+</option>
                    <option>XXX</option>
                    <option>Drama</option>
                  </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlInput1">Length (Minute)</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name = "time" placeholder="Minute" value="<?php echo $this->length; ?>" required>
                      </div>
                <div class="input-group">
                        <label for="exampleFormControlInput1">Release Date</label>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id=""></span>
                        </div>
                        <!-- <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="startDate">
                                <option selected>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                        </select>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="startMonth">
                                <option selected>Months</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                        </select>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name = "startYear">
                                <option selected>Years</option>
                                <option value="2999">2999</option>
                                <option value="2998">2998</option>
                                <option value="2997">2997</option>
                        </select> -->
                        <input type="date" name="dateRelease" required>
                      </div>
                      <br>
                      <div class="input-group">
                        <label for="exampleFormControlInput1">End Date</label>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id=""></span>
                        </div>
                        <!-- <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="endDate">
                                <option selected>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                        </select>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="endMonth">
                                <option selected>Months</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                        </select>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name = "endYear">
                                <option selected>Years</option>
                                <option value="2999">2999</option>
                                <option value="2998">2998</option>
                                <option value="2997">2997</option>
                        </select> -->
                        <input type="date" name="dateEnd" required>
                      </div>
                      <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describetion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "des" placeholder="add Describetion"><?php echo $this->des; ?></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
              </form>
              <br>
</div>


</body>
</html>