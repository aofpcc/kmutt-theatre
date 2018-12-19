<br>
<h2>Edit Promotion</h1>

<form action="/emp/promotion/edit/<?= $this->passedID ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="" class="form-label">Promotion Name</label>
    <input name="promotion_name" type="text" class="form-control" id='promotion_name' value="<?=$this->data["PromoName"] ?>">
  </div>
  <div class="form-group">
    <label for="" class="form-label">Description</label>
    <input name="promotion_des" type="text" class="form-control" id='promotion_des' value ="<?=$this->data["Description"] ?>">
  </div>
  <div class="form-group">
    <label for="" class="form-label">Discount</label>
    <input name="promotion_dis" type="text" class="form-control" id='promotion_dis' value = "<?=$this->data["Discount"] ?>">
  </div>
  <div class="form-group">
    <label for="" class="form-label">Start Date</label>
    <input name="promotion_start" type="datetime-local" class="form-control" id='promotion_start' value ="<?=$this->data["StartDate"] ?>">
  </div>
  <div class="form-group">
    <label for="" class="form-label">End Date</label>
    <input name="promotion_end" type="datetime-local" class="form-control" id='promotion_end' value = "<?=$this->data["EndDate"] ?>">
  </div>
  <div class="form-group">
    <label for="" class="form-label">Code Promotion</label>
    <input name="promotion_code" type="text" class="form-control" id='promotion_code' value = "<?=$this->data["PromoCode"] ?>" >
  </div>
  <div class="form-group">
    <label for="" class="form-label">Promotion Point</label>
    <input name="promotion_point" type="number" class="form-control" id='promotion_point' placeholder="0" >
  </div>
  <div class="form-group">
  <button class="btn btn-primary" type="submit">Add</button>
  </div>
  
</form>