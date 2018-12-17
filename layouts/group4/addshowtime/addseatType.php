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
              <h2 class="text-center text-uppercase text-secondary mb-0">Add Seat Type</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/seatType/add" method="post">
                    <div class="form-group">
                        <label for="typename">Seat Type Name:</label>
                        <input type="text" class="form-control" id="seattype" name="seattype" required>
                    </div>
                    <div class="form-group">
                        <label for="seatprice">Seat Price:</label>
                        <input type="text" class="form-control" id="seatprice" name="seatprice" required>
                    </div>
                    <div class="form-group">
                        <label for="info">Seat Type Information</label>
                        <textarea class="form-control" id="info" name="info" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Back  " onclick=" showSeattype_page()"></button>
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
               function showSeattype_page()
                {
                    location.href = "/emp/showSeattype";
                } 
          </script>

        

        <br><br><br>