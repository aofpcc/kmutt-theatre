<br>
<h2>Movie Showtime</h2> 
<div class="container-fluid">
  <div class="row">
  		<div class="col-md-6"></div>
        <div class="col-md-6 text-right">
            <input type="button" class="btn btn-primary btn-lg custom-button-width .navbar-right"  value="  Add  " onclick=" add_page()"></button>
            <input type="button" class="btn btn-success btn-lg custom-button-width .navbar-right"  value=" Back  " onclick=" main_page()"></button>
    	</div>
  </div>
</div>
<br>



<table class="table">
    <thead>
        <tr>
        <td>Showtime id</td>
        <td>Branch</td>
        <td>Room no</td>
        <td>Movie title</td>
        <td>Soundtrack</td>
        <td>Subtitle</td>
        <td>Date</td>
        <td>Start Time</td>
        <td>End Time</td>
        <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->data as $d) { ?>
            <tr>
                <td><?=$d['showtime_id']?></td>
                <td><?=$d['BranchName']?></td>
                <td><?=$d['room_no']?></td>
                <td><?=$d['title']?></td>
                <td><?=$d['soundtrack']?></td>
                <td><?=$d['subtitle']?></td>
                <td><?=$d['date(s.startTime)']?></td>
                <td><?=$d['time(s.startTime)']?></td>
                <td><?=$d['time(s.endTime)']?></td>
                <td>
                    <button type="button" class="btn btn-success" onClick="location.href='/emp/edit_showtime/<?=$d['showtime_id']?>';">Edit</button>
                    <button type="button" class="btn btn-danger" onClick="del(<?=$d['showtime_id']?>);">Delete</button>
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
        $.post("/emp/g04/showTime/del/"+e).done(function(data){
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
        location.href = "/emp/add_showtime";
    } 
    function main_page()
    {
        location.href = "/emp/g04";
    } 


</script>