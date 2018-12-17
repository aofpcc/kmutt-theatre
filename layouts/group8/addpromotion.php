<br>
<h2>Add Promotion</h1>
<form action="/emp/promotion/add" method="post">

    <div class="form-group">
    <label for="" class="form-label">Promotion Name</label>
    <input name="promotion_name" type="text" class="form-control" placeholder="xxxx" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">Description</label>
    <input name="promotion_des" type="text" class="form-control" placeholder="xxxx" required> 
  </div>

  <div class="form-group">
    <label for="" class="form-label">Discount</label>
    <input name="promotion_dis" type="number" class="form-control" placeholder="xxxx" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">Start Date</label>
    <input name="promotion_start" type="datetime-local" class="form-control" placeholder="dd/mm/yy" required>
  </div>

  <div class="form-group">
    <label for="" class="form-label">End Date</label>
    <input name="promotion_end" type="datetime-local" class="form-control" placeholder="dd/mm/yy" required>
  </div>
  <div class="form-group">
    <label for="" class="form-label">Code Promotion</label>
    <input name="promotion_code" type="datetime-local" class="form-control" placeholder="Movie30฿" required>
  </div>

  <div class="form-group">
  <button class="btn btn-primary" type="submit">Add</button>
  </div>
</form>