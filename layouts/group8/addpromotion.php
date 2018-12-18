<br>
<h2>Add Promotion</h1>
<form action="/emp/promotion/add" method="post" enctype="multipart/form-data"> 

    <div class="form-group">
    <label for="" class="form-label">Promotion Name</label>
    <input name="promotion_name" type="text" class="form-control" id='promotion_name' placeholder="xxxx" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">Description</label>
    <input name="promotion_des" type="text" class="form-control" id='promotion_des' placeholder="xxxx" required> 
  </div>
  <div class="form-group">
    <label for="" class="form-label">Discount</label>
    <input name="promotion_dis" type="number" class="form-control" id='promotion_dis' placeholder="xxxx" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">Start Date</label>
    <input name="promotion_start" type="datetime-local" class="form-control" id='promotion_start' placeholder="dd/mm/yy" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">End Date</label>
    <input name="promotion_end" type="datetime-local" class="form-control" id='promotion_end' placeholder="dd/mm/yy" required>
  </div>
  <div class="form-group">
    <label for="" class="form-label">Code Promotion</label>
    <input name="promotion_code" type="text" class="form-control" id='promotion_code' placeholder="Movie30฿" >
  </div>
  <div class="form-group">
    <label for="" class="form-label">Promotion Point</label>
    <input name="promotion_point" type="number" class="form-control" id='promotion_point' placeholder="0" >
  </div>
  <div class="form-group">
  <input type="file" name="promotion_pic" id='promotion_pic' required>
  </div>
  <div class="form-group">
  <button class="btn btn-primary" type="submit">Add</button>
  </div>
</form>