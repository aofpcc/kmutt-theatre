<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
  <link href="/layouts/group1/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/layouts/group1/css/onStyle.css">


  <!-- <style>

    body  {
    background-color: #303030;
  }
  .main{
  width: 80%;
  margin: 45px auto;
  background:rgba(255, 255, 255, 0.88);
  padding: 30px 30px;
}
  </style> -->
</head>

<br><br>
<div class="main">
  <h1 class="my-4"><button type="button" class="btn btn-lg btn-danger">STEP 4</button>
    <small>Payment</small>
  </h1><br>
  <div class="card card-temp shadow-lg">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://lh3.googleusercontent.com/8Lr1BMoZOxsSLoTZr6IxDZuLDiSc6oMTopLA2B-MhXbwxqpDguDHy8r_zj1430V2augHqTSdHsNjz6MYfbEm=w260"
                alt=""></a>
          </div>
        </div>

        <div class="col-md-8">
          <br>
          <img src="/layouts/group1/image/ten.jpg"><br><br>
          <font size="6">GingerClown</font><br><br>
          <font size="4">30 February 2030</font><br><br>
          <font size="4">21 : 00</font> &nbsp&nbsp&nbsp <font size="4"> Theater 5 </font><br><br>
          <font size="4">135 Mins</font> <br><br>
          <font size="4">จำนวนที่นั่งเลือก</font>
          <font size="4">ที่นั่ง</font><br><br>
          <font size="4">ราคารวม (ส่วนลด 10%) </font><br><br>
          <font size="4">ที่นั่ง </font>
          <?php
// for ($i=0; $i < count($this->seats); $i++) {
//   echo json_encode($this->seats);
//
// }
$arry = json_decode(json_encode($this->seats), true);
foreach ($arry as $result) {
    echo $result['row'], '-', $result['seat'], '<br/>';
}
//echo json_encode($this->seats);
//print_r($this->seats);
?>
          <br> <br>
          <button type="button" class="btn btn-lg btn-default">KBANK</button>
          <button type="button" class="btn btn-lg btn-default">SCB</button>
          <button type="button" class="btn btn-lg btn-default">CREDIT</button>
          <button type="button" class="btn btn-lg btn-default">CLUBCARD</button>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</div>
