<br>
<h2>Seat Type</h2> 
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
        <td>Id</td>
        <td>Seat Type</td>
        <td>Seat Price</td>
        <td>Seat Type Information</td>
        <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->Sdata as $rt) { ?>
            <tr>
                <td><?=$rt['id']?></td>
                <td><?=$rt['seattype']?></td>
                <td><?=$rt['seat_price']?></td>
                <td><?=$rt['seatInfo']?></td>
                <td>
                    <button type="button" class="btn btn-success" onClick="location.href='/emp/edit_seattype/<?=$rt['id']?>';">Edit</button>
                    <button type="button" class="btn btn-danger" onClick="del(<?=$rt['id']?>);">Delete</button>
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
        $.post("/emp/g04/seatType/del/"+e).done(function(data){
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
        location.href = "/emp/add_seattype";
    } 

</script>