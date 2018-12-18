<br>
<h2>Edit Promotion</h1>
<form action="/emp/promotion/edit/[:promo_id]" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="" class="form-label">Promotion Name</label>
    <input name="promotion_name" type="text" class="form-control" value="kuy.<?=$this->data["PromoName"] ?>haha">
  </div>

  <div class="form-group">
    <label for="" class="form-label">Description</label>
    <input name="promotion_des" type="text" class="form-control" value ="<?=$promotion["Description"] ?>">
  </div>

  <div class="form-group">
    <label for="" class="form-label">Discount</label>
    <input name="promotion_dis" type="text" class="form-control"value = "<?=$promotion["Discount"] ?>">
  </div>

  <div class="form-group">
    <label for="" class="form-label">Start Date</label>
    <input name="promotion_start" type="date" class="form-control"value ="<?=$promotion["StartDate"] ?>">
  </div>

  <div class="form-group">
    <label for="" class="form-label">End Date</label>
    <input name="promotion_end" type="date" class="form-control"value = "<?=$promotion["EndDate"] ?>">
  </div>

  <div class="form-group">
  <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>