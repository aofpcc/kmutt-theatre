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
              <h2 class="text-center text-uppercase text-secondary mb-0">Add Room</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/Amountseat/add" method="post">
                  <div class="form-group">
                          <label for="sel1">Branch:</label>
                          <select class="form-control" id="branch_id" name="branch_id">
                            <?php foreach ($this->branches as $branch) {?>
                              <option value="<?=$branch["BranchID"]?>"><?=$branch["BranchName"]?></option>
                            <?php }?>
                          </select>
                        </div>
                        <div class="control-group" style="display: block;" id="room_no">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Room No:</label>
                            <input id="rroom_no" type="hidden" name="room_no">
                            <input id="room_no" type="number" class="form-control" placeholder="" required disabled name="">
                            <p class="help-block text-danger">
                            </p>
                          </div>
                        </div>

                    <div class="form-group">
                    <label for="sel1">Room Type:</label>
                          <select class="form-control" id="roomtype" name="roomtype">
                            <?php foreach ($this->roomtype as $roomtype) {?>
                              <option value="<?=$roomtype["id"]?>"><?=$roomtype["roomtype"]?></option>
                            <?php }?>
                          </select>
                        </div>

                        <div class="control-group" style="display: block;" id="seattype">
                          <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Seat Type:</label>
                            <input id="sseattype" type="hidden" name="seattype">
                            <input id="seattype" type="text" class="form-control" placeholder="" required disabled name="">
                            <p class="help-block text-danger">
                            </p>
                          </div>
                        </div>

                    <div class="form-group">
                        <label for="all_seat_row">Add Amount of seat per Row:</label>
                        <input type="number" class="form-control" id="all_seat_row" name="all_seat_row" required>
                    </div>
                    <div class="form-group">
                        <label for="all_seat_no">Add Amount of seat per column</label>
                        <input type="number" class="form-control" id="all_seat_no" name="all_seat_no" required>
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