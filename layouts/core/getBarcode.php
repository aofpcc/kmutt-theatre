<style media="screen">
  @media print {
    .printer {
      text-align:center; padding-top: 70px;
    }
  }

  .printer {
    text-align:center; padding-top: 70px;
  }
</style>
<div class="container" style="height: 40vh;">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="printer">
      <div class="form-group col-lg-12">
        <?=$this->barcode?>
      </div>
      <div class="form-group col-lg-12">
        <?=$this->code?>
      </div>
    </div>
  </div>
</div>
