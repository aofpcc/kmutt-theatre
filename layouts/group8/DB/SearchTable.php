<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="/layouts/group8/DB/css/promo.css">
    <script src="/layouts/group8/DB/js/ads.js"></script>
    <script src="/layouts/group8/DB/js/jquery.dataTables.min.js"></script>
    <script src="/layouts/group8/DB/js/dataTables.autoFill.min.js"></script>
  </head>
    <div name="header" class="head">
      <h1>KMUTT Theatre</h1>
      <h3><a href="/emp/group8">Promotion Home</a></h3>
    </div>
    <div name="body" class="main-body">

        <div class="list">
          <h2>Promotion List</h2>
          <div class="table-scroll">
            <table id="Promotable">
              <thead>
                <tr>    
                  <th class="list-id">ID</th>
                  <th class="list-name">Name</th>
                  <th class="list-des">Description</th> 
                  <th class="list-date">Start date</th>
                  <th class="list-date">End date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  for($i = 0; $i < count($this->list); $i++) { 
                ?>
                  <tr>
                    <td id="id<?=$this->list[$i]['PromoID'] ?>"><?=$this->list[$i]['PromoID'] ?></td>
                    <td style="text-align: left"><a class="name" id="name<?=$this->list[$i]['PromoID'] ?>" href="#" onclick="return false;"><?=$this->list[$i]['PromoName'] ?></a></td>
                    <td id="des<?=$this->list[$i]['PromoID'] ?>"><?=$this->list[$i]['Description'] ?></td>
                    <td id="st-date<?=$this->list[$i]['PromoID'] ?>"><?=$this->list[$i]['StartDate'] ?></td>
                    <td id="en-date<?=$this->list[$i]['PromoID'] ?>"><?=$this->list[$i]['EndDate'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="Promotion">
            <div class="ads-head">
              <h2>PromotionID<h2><input type="text" name="PromoID" id="PromoID" readonly></h2></h2>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>Name:</h4>
              <input type="text" name="PromoName" id="PromoName" placeholder=" PromotionName" required>
            </div>
            <div class="form-item">
              <div class="form-img">
                <img src="/layouts/group8/img/placeholder-image.jpg" alt="preview-image" id="pre-img" onchange="readURL(input)">
              </div>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>Description:</h4>
              <input type="text" name="Description" id="Description" placeholder=" Description" required>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>Discount:</h4>
              <input type="text" name="Discount" id="Discount" placeholder=" Discount" required>
            </div>
            <div class="form-item" style="margin-top: 0">
              <h4>Code:</h4>
              <input type="text" name="PromoCode" id="PromoCode" placeholder=" Code" required>
            </div>
            <div class="form-item">
              <h4>Start:</h4>
              <input type="datetime-local" name="start-date" id="StartDate" value="" required>
            </div>
            <div class="form-item">
              <h4>End:</h4>
              <input type="datetime-local" name="end-date" id="EndDate" value="" required>
          </form>
      
        </div>
    </div>