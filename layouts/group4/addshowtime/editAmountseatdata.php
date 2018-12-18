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
              <h2 class="text-center text-uppercase text-secondary mb-0">Add Room Type</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/Amountseat/edit" method="post">
                  <input type="hidden" name="id" value="<?=$this->data["id"] ?>">
                  <input type="hidden" name="room_id" value="<?=$this->data["room_id"] ?>">
                    <div class="form-group">
                        <label for="all_seat_row">Add Amount of seat per Row:</label>
                        <input type="text" class="form-control" id="all_seat_row" name="all_seat_row" value="<?=$this->data["all_seat_row"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="all_seat_no">Add Amount of seat per column</label>
                        <input type="text" class="form-control" id="all_seat_no" name="all_seat_no" value="<?=$this->data["all_seat_no"] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
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