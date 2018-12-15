<div class='alert alert-danger'>
  <h5 style='font-size: 10pt'>TIME REMAINING</h5>
  <h5 style='font-size: 17pt' id="clockDiv"></h5>
</div>

<script type="text/javascript">
  var time_in_minutes = 5;
  var current_time = Date.parse(new Date());
  // var deadline = new Date(2018, 12, 14, 12, 20, 0, 0); 
  var unixTime = <?php echo $this->deadline; ?>;
  var deadline = new Date(unixTime * 1000);

  function time_remaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
  }
  function run_clock(id,endtime){
    var clock = document.getElementById(id);
    function update_clock(){
      var t = time_remaining(endtime);

      var min = ('0' + t.minutes).slice(-2)   // make it two digits
      var sec = ('0' + t.seconds).slice(-2)   // make it two digits
      // clock.innerHTML = 'minutes: '+t.minutes+'<br>seconds: '+t.seconds;
      clock.innerHTML = min +':'+ sec;
      if(t.total<=0){ clearInterval(timeinterval); }
    }
    update_clock(); // run function once at first to avoid delay
    var timeinterval = setInterval(update_clock,1000);
  }
  run_clock('clockDiv',deadline);
</script>
