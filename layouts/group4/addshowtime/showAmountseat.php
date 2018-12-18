<br>
<h2>Room</h2> 
<div class="container-fluid">
  <div class="row">
  		<div class="col-md-6"></div>
        <div class="col-md-6 text-right">
            <input type="button" class="btn btn-primary btn-lg custom-button-width .navbar-right"  value="  Add Room  " onclick=" add_page()"></button>
    	</div>
  </div>
</div>
<br>



<table class="table">
    <thead>
        <tr>
        <td>Id</td>
        <td>Branch</td>
        <td>Room No</td>
        <td>Room Type</td>
        <td>Seat Type</td>
        <td>Seat Price</td>
        <td>Amount of seat per Row</td>
        <td>Amount of seat per column</td>
        <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->SRdata as $sr) { ?>
            <tr>
                <td><?=$sr['id']?></td>
                <td><?=$sr['BranchName']?></td>
                <td><?=$sr['room_no']?></td>
                <td><?=$sr['roomtype']?></td>
                <td><?=$sr['seattype']?></td>
                <td><?=$sr['seat_price']?></td>
                <td><?=$sr['all_seat_row']?></td>
                <td><?=$sr['all_seat_no']?></td>
                <td>
                    <button type="button" class="btn btn-success" onClick="location.href='/emp/edit_amountseat/<?=$sr['id']?>';">Edit</button>
                    <button type="button" class="btn btn-danger" onClick="del(<?=$sr['id']?>);">Delete</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    function del(e) {
        if(!confirm("Confirm Delete")) {
            return;
        }
        $.post("/emp/g04/Amountseat/del/"+e).done(function(data){
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
        location.href = "/emp/add_amountseat";
    } 

</script>