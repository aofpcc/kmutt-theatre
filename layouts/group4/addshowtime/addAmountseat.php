<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>


<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <br><br><br>

  <div class="card card-temp shadow-lg">
      <div class="container">
        <br>
         <!-- Contact Section -->
         <section id="add">
            <div class="container">
              <h2 class="text-center text-uppercase text-secondary mb-0">Add Amount of Seat</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/Amountseat/add" method="post">
                  <div class="form-group">
                          <label for="sel1">Branch:</label>
                          <select class="form-control" id="branch_id" name="branch_id">
                            <?php foreach($this->branches as $branch) { ?>
                              <option value="<?=$branch["BranchID"] ?>"><?=$branch["BranchName"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    <div class="form-group">
                        <label for="all_seat_row">Room No:</label>
                        <input type="text" class="form-control" id="room_no" name="room_no" required>
                    </div>
                    <div class="form-group">
                        <label for="all_seat_row">Add Amount of seat per Row:</label>
                        <input type="text" class="form-control" id="all_seat_row" name="all_seat_row" required>
                    </div>
                    <div class="form-group">
                        <label for="all_seat_no">Add Amount of seat per column</label>
                        <input type="text" class="form-control" id="all_seat_no" name="all_seat_no" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Back  " onclick=" showAmountseat_page()"></button>
                    <br><br>
                    <br><br><br>
                  </form>
                </div>
              </div>
            </div>
          </section>
              </div>
            </div>
            <br><br>
          </div>
          <script>
               function showAmountseat_page()
                {
                    location.href = "/emp/showAmountseat";
                } 
          </script>

        

        <br><br><br>