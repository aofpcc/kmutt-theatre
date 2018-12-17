<?php
$klein->respond('GET', '/fnb/sale', function ($request, $response, $service) {
  $service->bootstrap3 = false;
  global $database;
  $conn = $database->getConnection();
  $service->render('layouts/group13/index.php');
});

$klein->respond('GET', '/fnb/stock', function ($request, $response, $service) {
  $service->bootstrap3 = false;
  global $database;
  $conn = $database->getConnection();
  $service->render('layouts/group13/stock.php');
});


$klein->respond('POST', '/fnb/checkcoupon', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('couponcode', 'Bad Request')->notNull();

  $couponcode= $request->couponcode;
  $sql = "select * from G08_Promo_code where CodeNo = '$couponcode'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();

  if ($num > 0) {
//    $row = $result->fetch_assoc();
    $status = $row['status'];
    $someArray = [
      [
        "status"   => $status,
      ]

    ];

    $response->json($someArray);
  }else{
    $someArray = [
      [
        "status"   => "Code Invalid"

      ]
    ];
    $response->json($someArray);
  }
});

$klein->respond('POST', '/fnb/checkcusid', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('CusID', 'Bad Request')->notNull();

  $CusID= $request->CusID;
  if (!is_numeric($CusID)){
    return $response->json([[
      "status"   => "N"
    ]]);
  }
  $sql = "select * from G05_Member_profile where MemberID = ".$CusID;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();
  if ($num > 0) {
    $someArray = [
      [
        "status"   => "Y",
      ]
    ];
    return $response->json($someArray);
  }else{
    $someArray = [
      [
        "status"   => "N"
      ]
    ];
    return $response->json($someArray);
  }
});

$klein->respond('POST', '/fnb/checkemp', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('empID', 'Bad Request')->notNull();

  $empID= $request->empID;
  if (!is_numeric($empID)){
    return $response->json([[
      "status"   => "N"
    ]]);
  }
  $sql = "select * from G11_Emp_staff where Emp_id = '$empID'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();

  if ($num > 0) {
    $someArray = [
      [
        "status"   => "Y",
      ]
    ];
    $response->json($someArray);
  }else{
    $someArray = [
      [
        "status"   => "N"
      ]
    ];
    $response->json($someArray);
  }
});

$klein->respond('POST', '/fnb/get_points_and_name', function ($request, $response, $service, $app, $validator) {
    global $database;
    $conn = $database->getConnection();

    $service->validateParam('CusID', 'Bad Request')->notNull();


    $cusID = $request->CusID;
    $sql = "select SUM(Point) as hisPoint,Lname,Fname  from G13_FNB_Point as p,G05_Member_profile as m where p.CusID = '$cusID' AND m.MemberID = '$cusID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $num = $stmt->rowCount();

    if ($num > 0) {
        $row = $stmt->fetchAll(PDO::FETCH_BOTH);
        $row=$row[0];
        $hisPoints = $row['hisPoint'];
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $someArray = [
            [
                "hisPoint" => $hisPoints,
                "name" => $fname." ".$lname,
            ]
        ];
        $response->json($someArray);
    }else{
        $response->body("error");
        $response->sendBody();
    }
});


$klein->respond('POST', '/fnb/getprice', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('productID', 'Bad Request')->notNull();

  $productID=$request->productID;
  $sql = "select * from G13_FNB_ProductList where productID = '$productID'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
//    $row = $stmt->fetchAll(PDO::FETCH_BOTH);
  $num = $stmt->rowCount();

  if ($num > 0) {
    $row = $stmt->fetchAll(PDO::FETCH_BOTH);
    $row=$row[0];
    $price = $row['price'];
    $productname = $row['productName'];
    $someArray = [
      [
        "status"   => "Success",
        "price" => $price,
        "productName" => $productname,
        "productID" => $productID,
      ]
    ];
    $response->json($someArray);
  }else{
    $response->body("error");
    $response->sendBody();
  }
});

$klein->respond('POST', '/fnb/do_order', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('empID', 'Bad Request')->notNull();
  $service->validateParam('payment', 'Bad Request')->notNull();
  $service->validateParam('item', 'Bad Request')->notNull();
  $service->validateParam('product', 'Bad Request')->notNull();
  $service->validateParam('total', 'Bad Request')->notNull();

    $empID = $request->empID;
    $cusID = $request->cusID;
    $payment = $request->payment;
    $item = $request->item;
    $product = $request->product;
    $coupon = $request->couponID;
    $total = $request->total;
    $items = explode(",",$item);
    $products =explode(",",$product);


//    $data =[
//        [
//            "empID" => $empID,
//            "cusID" => $cusID,
//            "payment" => $payment,
//            "item" => $item,
//            "product" => $product,
//            "coupon" => $coupon,
//            "total" =>$total,
//        ]
//    ];
//    return $response->json($data);
  $sql = "INSERT INTO G13_FNB_SaleList(cusID,empID,paymentType,codeID,total,Time,Date) values('$cusID','$empID','$payment','$coupon','$total',NOW(),NOW())";
  $order = "SELECT max(receiptID) as receiptID FROM G13_FNB_SaleList";
//  $stock = "UPDATE G13_FNB_Stock as s SET Remain = $xxx WHERE s.StockID=$StockID";
  $conn->beginTransaction();

  try {
      $productsOrderStock = getProductOrderForStock($products,$items);
      updateAllOrderStock($productsOrderStock);
      return $response->json(["result"=>"success","productOrderForStock"=>$productsOrderStock]);
    $conn->exec($sql);
    $orderresult = $conn->prepare($order);
    $orderresult->execute();
    $row = $orderresult->fetchAll(PDO::FETCH_BOTH);
    $row = $row[0];
    $receiptID =  $row['receiptID'];
    for($i=0; $i<count($item);$i++){
        $data ="INSERT INTO realtheatre.`G13_FNB_detail` (receiptID,productID,quantity) VALUES('$receiptID','$products[$i]','$items[$i]')";
        $a = $conn->prepare($data);
        $a->execute();
    }

//    updateAllOrderStock($productsOrderStock);
    $conn->commit();
    return $response->json(["result"=>"success","message"=>"all :".count($items)." item[s]"]);
  } catch(PDOException $e) {
    $conn->rollback();
     return $response->json(
        [
             "result"=>"failed",
             "error"=>$e->getMessage(),
        ]
     );
  }
});

function getSize($productID){
    global $database;
    $conn = $database->getConnection();
    $sizeSql = "select Size from G13_FNB_ProductList where productID = '$productID'";
    $sizeResult = $conn->prepare($sizeSql);
    $sizeResult->execute();
    $size = $sizeResult->fetchAll(PDO::FETCH_BOTH);
    $size = $size[0];
    return $size["Size"];
}

function getStockID($productID):string {
    $stockID = substr($productID,0,4);
    return $stockID;
}

function getProductOrderForStock($productOrderList,$quantityList){
    $productOrderStock = [];
    foreach ($productOrderList as $k =>$product) {
        array_push($productOrderStock,[
            "stockID"=>getStockID($product),
            "size"=>getSize($product),
            "quantity"=>$quantityList[$k],
            "remain"=>getRemain(getStockID($product))
        ]);
    }
    return $productOrderStock;
}
function getStockTable(){
    global $database;
    $conn = $database->getConnection();
    $selectStock = "SELECT Remain, StockID FROM G13_FNB_Stock";
    $selectStockResult = $conn->prepare($selectStock);
    $selectStockResult->execute();
    $stockTable = $selectStockResult->fetchAll(PDO::FETCH_BOTH);
    return $stockTable;
}
function getRemain($stockID){
    global $database;
    $conn = $database->getConnection();
    $remainSql = "SELECT Remain FROM G13_FNB_Stock WHERE StockID = '$stockID'";
    $remainResult = $conn->prepare($remainSql);
    $remainResult->execute();
    $remain = $remainResult->fetchAll(PDO::FETCH_BOTH);
    return $remain[0]["Remain"];
}
function updateStock($stockID,$remain){
    global $database;
    $conn = $database->getConnection();
    $stockUpdateSql = "UPDATE G13_FNB_Stock as s SET Remain = $remain WHERE s.StockID='$stockID'";
    $stockUpdate = $conn->prepare($stockUpdateSql);
    $stockUpdate->execute();
}

function updateAllOrderStock($productOrderForStock){
    foreach ($productOrderForStock as $product){
        updateStock($product["stockID"],$product["remain"]-($product["size"]*$product["quantity"]));
    }
}




