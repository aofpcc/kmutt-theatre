
    <br><br>
    <!-- Page Content -->
    <div class="main">
    <div class="container">

       <!-- Page Heading  -->
      <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 1</button>
        <small>Choose location</small>
      </h1>

      <div class="card card-temp shadow-lg">
          <div class="container">
            <br>
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260" alt=""></a>
                  </div>
                </div>

                <div class="col-md-8">
                    <br><br><br><br>
                    <h4>Fantastic Beasts The Crimes of Grindelwald</h4>
                    <h7>Genre: Fantasy</h7><br>
                    <h7>Rate: G</h7><br>
                    <h7>135 Mins</h7><br><br>
                    <!-- <button type="button" class="btn btn-lg btn-default">MOVIE DETAIL</button> -->
                  </div>
              </div>
          </div>
        </div>


    <!-- <div class="card card-temp"> -->
            <!-- <div class="container"> -->
                <form action="/customer/kmutt_home/branch/show_time" method="post">
                  <br>
                    <div class="form-group">
                      <label for="sel1">ALL CINEMAS:</label>
                      <select class="form-control" id="sel1">
                        <?php
                          for($i = 0; $i < count($this->query); $i++) {
                        ?>
                        <option value="value <?=$this->query[$i]['BranchName'] ?>">
                          <?=$this->query[$i]['BranchName']  ?></option>
                      <?php } ?>
                    </select>
                  </div>

                    <div class="form-group">
                      <label for="sel1">DATE:</label>
                      <select class="form-control" id="sel1">
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">CENIMA NUMBER:</label>
                      <select class="form-control" id="sel1">
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">TIME:</label>
                      <div class="card card-temp shadow-sm">
                      <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                          <a href="#">
                            <br><br>
                            <center><img class="img-fluid rounded mb-3 mb-md-0" src="https://lh3.googleusercontent.com/1fVPsPOjLnZ3tNzeLrlcr-QKvV_9DUnRgEPXYWqkcmRpr6EPjAjanHquRzgLQZPJG9V78tzQ6sfL08Ma4S9W=h59" alt=""></center>
                          </a>
                        </div>
                        <div class="col-md-5">
                            <br>
                          <h4>ENG</h4>
                          <?php
                              for ($i=0; $i < count($this->query_time); $i++) {
                          ?>

                              <button type="button" class="btn btn-danger" style="margin: 1%!important">
                                <?=$this->query_time[$i]['time_movie'] ?></button>
                          <?php
                              }
                            ?>

                          <!-- <a class="btn btn-outline-primary" href="#">10:20</a>
                          <a class="btn btn-outline-primary" href="#">12:20</a>
                          <a class="btn btn-outline-primary" href="#">15:20</a>
                          <a class="btn btn-outline-primary" href="#">17:20</a>
                          <a class="btn btn-outline-primary" href="#">21:20</a> -->
                        </div>
                      </div>
                  </div>
                    </div>

                    <button type="submit" id = "showtime" class="btn btn-primary btn-lg btn-block" name = "show_time">SHOW TIME</button>
                  </form>
            </div>
          </div>

        <!-- </div> -->
      <!-- </div> -->

    <br><br><br>
