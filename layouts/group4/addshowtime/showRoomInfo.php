<br>
<h2>Room Info</h2> 
<div class="container-fluid">
  <div class="row">
  		<div class="col-md-6"></div>
        <div class="col-md-6 text-right">
            <input type="button" class="btn btn-primary btn-lg custom-button-width .navbar-right"  value="  Add  " onclick=" add_page()"></button>
    	</div>
  </div>
</div>
<br>



<table class="table">
    <thead>
        <tr>
        <td>Seat Pic</td>
        <td>Room Type</td>
        <td>Room Info</td>
        <td>Seat Type</td>
        <td>Seat Info</td>
        <td>Seat Price</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->RIdata as $ri) { ?>
            <tr>
                <td><img src="<?='/layouts/group4'.$ri['seatpic']?>" alt="Smiley face" height="42" width="42"></td>
                <td><?=$ri['roomtype']?></td>
                <td><?=$ri['roomInfo']?></td>
                <td><?=$ri['seattype']?></td>
                <td><?=$ri['seatInfo']?></td>
                <td><?=$ri['seat_price']?></td>
                <td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    function del(e) {
        if(!confirm("Confirm Delete")) {
            return;
        }
        $.post("/emp/g04/roomType/del/"+e).done(function(data){
            // console.log(data);
            if(!data.err){
                alert(data.message);
                location.reload();
            }else{
                alert("Fail to Delete");
                console.log(data.err);
            }
        }).fail(function(err){
            console.log(err);
        });
    }

    function add_page()
    {
        location.href = "/emp/add_roominfo";
    } 

</script>