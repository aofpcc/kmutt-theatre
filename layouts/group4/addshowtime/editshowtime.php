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
              <h2 class="text-center text-uppercase text-secondary mb-0">Edit Showtime</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- action form -->
                  <form action="/emp/g04/showTime/add" method="post">
                    <div class="form-group">
                      <label for="sel1">Movie:</label>
                      <select class="form-control" id="movie_id" name="movie_id">
                        <?php foreach($this->movies as $movie) { ?>
                          <option value="<?=$movie["id"] ?>"><?=$movie["title"]." [".$movie['language']."]"?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Branch:</label>
                      <select class="form-control" id="branch_id" name="branch_id">
                        <?php foreach($this->branches as $branch) { ?>
                          <option value="<?=$branch["BranchID"] ?>"><?=$branch["BranchName"] ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Room No:</label>
                      <select class="form-control" id="room_id" name="room_id">
                      </select>
                    </div>

                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Start Time:</label>
                        <input id="startTime" type="datetime-local" class="form-control" placeholder="" required name="startTime">
                        <p class="help-block text-danger">
                          <!-- Choose Time to set period of the movie show time -->
                        </p>
                      </div>
                    </div>

                    <div class="control-group" style="display: block;" id="EndTimeBlock">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>End Time:</label>
                        <input id="hendTime" type="hidden" name="endTime">
                        <input id="endTime" type="datetime-local" class="form-control" placeholder="" required disabled name="">
                        <p class="help-block text-danger">
                          <!-- Choose Time to set period of the movie show time -->
                        </p>
                      </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Add</button>
                      <input type="button" class="btn btn-success btn-xl custom-button-width .navbar-right"  value="  Back  " onclick=" data_page()"></button>
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

          <script type="text/javascript">
            var min = 60;

            function formatDate(date) {
                var d = new Date(date),
                    month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear(),
                    hour = d.getHours(),
                    min = d.getMinutes();

                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;
                if (hour < 10) hour = '0' + hour;
                if (min < 10) min = '0' + min;

                return [year, month, day].join('-')+"T"+hour+":"+min;
            }

            function changeRoomOption(e) {
              $.get('/emp/g04/getroom/' + e).done(function(data){
                $("#room_id").children("option").remove();
                $.each(data, function(key, value) {   
                    $('#room_id').append($("<option></option>")
                                    .attr("value",value.id)
                                    .text(value.room_no)); 
                });
              });
            }

            function changeMoviesEndTime() {
              var e = $("#movie_id").val();
              var temp;
              $.get('/emp/g04/movies/' + e).done(function(data){
                data = JSON.parse(data);
                // console.log(data);
                newEndDate(data.minute);
              })
            }

            $(document).ready(function(){
              changeRoomOption(1);
            });

            $("#branch_id").change(function(){
              changeRoomOption($("#branch_id").val());
            });

            $("#startTime").change(function(){
              changeMoviesEndTime();
            });

            $("#movie_id").change(function(){
              changeMoviesEndTime();
            });;
            
            function newEndDate(min){
              // console.log("Min " + min);
              
              var val = $("#startTime").val();
              if(!val){
                return;
              }
              var date = new Date(val);
              var x = date.getTime() + 60000*min;
              // console.log(date.getTime());
              
              var endDate = new Date(date.getTime() + 60000*min);
              // console.log(date);
              // console.log(endDate);

              var day = formatDate(endDate);
              // console.log(day);
              
              // $("#endTime").val(endDate.toLocaleString().substring(0, 17));
              $("#endTime").val(day);
              $("#hendTime").val(day);
            }

            function data_page()
            {
                location.href = "/emp/showtime";
            } 
            
          </script>
    
        <br><br><br>