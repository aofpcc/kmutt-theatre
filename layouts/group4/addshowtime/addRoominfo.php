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
              <h2 class="text-center text-uppercase text-secondary mb-0">Add Room Information</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/roominfo/add" method="post">
                    <div class="form-group">
                        <label for="typename">Room Type Name:</label>
                        <input type="text" class="form-control" id="roomtype" name="roomtype" required>
                    </div>
    
                    <div class="form-group">
                        <label for="info">Room Type Information</label>
                        <textarea class="form-control" id="info" name="info" rows="8" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="typename">Seat Type Name:</label>
                        <input type="text" class="form-control" id="seattype" name="seattype" required>
                    </div>

                    <div class="form-group">
                        <label for="info">Seat Type Information</label>
                        <textarea class="form-control" id="info" name="info" rows="8" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="typename">Seat Price:</label>
                        <input type="number" class="form-control" id="typename" name="roomtype" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Back  " onclick=" showRoomtype_page()"></button>
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
               function showRoomtype_page()
                {
                    location.href = "/emp/showRoominfo";
                } 
          </script>

        

        <br><br><br>
