<!-- <div class="container">
<a href="/emp/showRoomtype">Room type</a><br>
<a href="/emp/showAmountseat">Amount Seat</a><br>
<a href="/emp/showRoominfo">Room Info</a><br>
<a href="/emp/showSeattype">seat type</a><br>
<a href="/emp/showtime">show time</a><br>
</div> -->
<div class="card card-temp shadow-lg">
      <div class="container">
        <br>
         <!-- Contact Section -->
         <section id="add">
            <div class="container">
              <h2 class="text-center text-uppercase text-secondary mb-0">Management Room Seat and Showtime</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form>
                    <div class="form-group">
                    <div class="container">
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Room Info  " onclick=" showRoominfo_page()"></button><br><br>
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Seat Amount  " onclick=" showAmountseat_page()"></button><br><br>
                    <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Showtime  " onclick=" showtime_page()"></button><br><br>
                            <!-- <a href="/emp/showRoominfo">Room Info</a><br>
                            <a href="/emp/showAmountseat">Seat Amount</a><br>
                            <a href="/emp/showtime">Showtime</a><br> -->
                      <br><br>
                    </div>
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
                  function showRoominfo_page()
                {
                    location.href = "/emp/showRoominfo";
                } 

                function showAmountseat_page()
                {
                    location.href = "/emp/showAmountseat";
                } 

                function showtime_page()
                {
                    location.href = "/emp/showtime";
                } 
         </script>