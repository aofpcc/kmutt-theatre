<?php
$klein->respond('GET', '/fnb', function ($request, $response, $service) {
  $service->bootstrap3 = false;
  global $database;
  $conn = $database->getConnection();
  $service->render('layouts/group13/main.php');
});

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

$klein->respond('POST', '/fnb/checkCusIDAndGetPointRecommend', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('cusID', 'Bad Request')->notNull();

  $cusID= $request->cusID;
  if (!is_numeric($cusID)){
    return $response->json([[
      "status"   => "N"
    ]]);
  }

  $sql = "select * from G05_Member_profile where MemberID = ".$cusID;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();
  if ($num > 0) {
    $recommend = getRecommend($cusID);
    $nameAndPoint= getPointName($cusID);
    $data = [
        "status"=> "Y",
        "recommend"=>$recommend,
        "name"=>$nameAndPoint["name"],
        "point"=>$nameAndPoint["points"],
    ];
    return $response->json($data);
  }else{
    $data = [
        "status"   => "N"
    ];
    return $response->json($data);
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

$klein->respond('POST', '/fnb/update_point', function ($request, $response, $service, $app, $validator) {
    global $database;
    $conn = $database->getConnection();
    $service->validateParam('CusID', 'Bad Request')->notNull();
//    $service->validateParam('points', 'Bad Request')->notNull();
//    $service->validateParam('hisPoints', 'Bad Request')->notNull();

    $cusID = $request->CusID;
    $points = $request->points;
    $hisPoints = $request->hisPoints;
    return $response->json(
        [
            "CusID"=>$cusID,
            "points"=>$points,
            "hisPoints"=>$hisPoints,
        ]
    );

    $sql = "SELECT totalpoint as hisPoint,Lname,Fname FROM G05_totalpoint as p ,G05_Member_profile as m WHERE p.MemberID = '$cusID' AND m.MemberID = '$cusID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $num = $stmt->rowCount();

});

$klein->respond('get', '/fnb/add_point', function ($request, $response, $service, $app, $validator){

    $cusID = $request->cusID;
    $points = $request->points;
    $receiptID = getMaxReceiptID();
//    print_r($receiptID);
    $x = $app->point->addPoint([
        "type" => "FNB",
        "memberID" => $cusID,
        "point" => $points,
        "transactionID" => $receiptID,
    ]);
    if($x["result"]) {
        echo "add point success";
//        $x["redeemID"];
    }else{
        echo "add point failed";

    }
});



$klein->respond('get', '/fnb/redeem_point', function ($request, $response, $service, $app, $validator){

    $cusID = $request->cusID;
    $points = $request->total;
    $receiptID = getMaxReceiptID();

    $x = $app->point->subtractPoint([
        "type" => "FNB",
        "memberID" => $cusID,
        "point" => $points,
        "transactionID" => $receiptID,
    ]);
    if($x["result"]) {
        echo "redeem point success";
//        $x["redeemID"];
    }else{
        echo "redeem point failed";

    }
});

function getMaxReceiptID()
{
    global $database;
    $conn = $database->getConnection();
  $receiptSql = "SELECT max(receiptID) as receiptID FROM G13_FNB_SaleList";
  $receiptID = $conn->prepare($receiptSql);
  $receiptID->execute();
  $receiptID = $receiptID->fetchAll(PDO::FETCH_BOTH);
    $receiptID = $receiptID[0]["receiptID"];
    return $receiptID;
}
function getMaxPOID()
{
    global $database;
    $conn = $database->getConnection();
    $POIDSql = "SELECT max(POID) as POID FROM G13_FNB_POmain";
    $POID = $conn->prepare($POIDSqlSql);
    $POID->execute();
    $POID = $POID->fetchAll(PDO::FETCH_BOTH);
    $POID = $POID[0]["POID"];
    return $POID;
}

function getStock(){
    global $database;
    $conn = $database->getConnection();
    $stockSql = "SELECT StockID, Remain FROM G13_v_Stock";
    $stockID = $conn->prepare($stockSql);
    $stockID->execute();
    $stockID = $stockID->fetchAll(PDO:: FETCH_BOTH);
    return $stockID;

}


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
    $payment = $request->payment;
    $item = $request->item;
    $product = $request->product;
    $coupon = $request->couponID;
    $total = $request->total;
    $drinkSet = $request->drinkSet;
    $flavorSet = $request->flavorSet;
    $items = explode(",",$item);
    $products =explode(",",$product);
    $drinkSet =explode(",",$drinkSet);
    $flavorSet =explode(",",$flavorSet);
    $cusID = $request->cusID;
    if($cusID==0){
        $cusID=null;
    }

//    return $response->json(
//        [
//            "result"=>"success",
//            "flavorSet"=>$flavorSet,
//            "drinkSet"=>$drinkSet,
//            "items"=>$items,
//            "products"=>$products,
//            "productsOrderStock"=>$productsOrderStock,
//        ]
//    );

    $insertSalelistSql = "INSERT INTO G13_FNB_SaleList(cusID,empID,paymentType,codeID,total,Time,Date) values('$cusID','$empID','$payment','$coupon','$total',NOW(),NOW())";
    $order = "SELECT max(receiptID) as receiptID FROM G13_FNB_SaleList";

    try {
        $conn->beginTransaction();
        $conn->exec($insertSalelistSql);
        $orderresult = $conn->prepare($order);
        $orderresult->execute();
        $row = $orderresult->fetchAll(PDO::FETCH_BOTH);
        $row = $row[0];
        $receiptID =  $row['receiptID'];
        for($i=0; $i<count($items);$i++){
            $updateDetailSql ="INSERT INTO realtheatre.`G13_FNB_detail` (receiptID,productID,quantity) VALUES('$receiptID','$products[$i]','$items[$i]')";
            $a = $conn->prepare($updateDetailSql);
            $a->execute();
        }

        //update stock
        $productsOrderStock = getProductOrderForStock($products,$items,$flavorSet,$drinkSet);
        updateAllOrderStock($receiptID,$productsOrderStock);

        //check stock and do PO
        $stock  = getStock();
       // var_dump($stock);
       // $conn->rollback();
       // die;
        //createPO($stock);

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
function orderPO($stockID){
    $supProduct = getSupProduct($stockID);
    $supID = $supProduct["supID"];
    $cost = $supProduct["cost"];
    $unit =$supProduct["unit"];
    $totalPaid = $cost*10;

    global $database;
    $conn = $database->getConnection();

    $orderPOSql = "INSERT INTO G13_FNB_POmain (supID,Date,Time,totalPaid) VALUES ('$supID',NOW(),NOW(),$totalPaid)";
    $orderPO = $conn->prepare($orderPOSql);
    $orderPO->execute();
    $conn->commit();

    $POID = getMaxPOID();
    $amount = $unit*10;


    $POdetailSql = "INSERT INTO G13_FNB_POdetail (POID,StockID,amount) VALUES ('6','PCCA','10')";
    $POdetail = $conn->prepare($POdetailSql);
    $POdetail->execute();
    $conn->commit();

    updateStockPO($POID,$stockID,$amount);
}


function getSupProduct($stockID){
    global $database;
    $conn = $database->getConnection();
    $supProductIDSql = "SELECT * FROM G13_FNB_SupProduct WHERE StockID='$stockID'";
    $supProduct = $conn->prepare($supProductIDSql);
    $supProduct->execute();
    $supProduct = $supProduct->fetchAll(PDO::FETCH_BOTH);
    $supID = $supProduct[0]["supID"];
    $unit = $supProduct[0]["unit"];
    $cost = $supProduct[0]["cost_per_unit"];
    $supProduct["supID"]=$supID;
    $supProduct["unit"]=$unit;
    $supProduct["cost"]=$cost;
    return $supProduct;
}

function CreatePO($stockItems){
    $conditionTable = [
        "PC"=>5000,
        "DR"=>970,
        "SN"=>50,
    ];
    foreach ($stockItems as $stockItem) {
        $typeID = substr($stockItem["StockID"],0,2);
        if($typeID=="PC"){
            if($stockItem["Remain"]<$conditionTable["PC"]){
                orderPO($stockItem["StockID"]);
            }
        }
        else if($typeID=="DR"){
            if($stockItem["Remain"]<$conditionTable["DR"]){
                orderPO($stockItem["StockID"]);
            }
        }
        else if($typeID=="SN"){
            if($stockItem["Remain"]<$conditionTable["SN"]){
                orderPO($stockItem["StockID"]);
            }
        }
    }
}

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

function getStockID($productID) {
    $stockID = substr($productID,0,4);
    return $stockID;
}

function getProductOrderForStock($productOrderList,$quantityList,$flavorSet,$drinkSet){
    $productOrderStock = [];
    foreach ($productOrderList as $k =>$productID) {
        if(substr($productID,0,4)!="PRST" ){
            array_push($productOrderStock,[
                "stockID"=>getStockID($productID),
                "size"=>getSize($productID),
                "quantity"=>$quantityList[$k],
                "remain"=>getRemain(getStockID($productID))
            ]);
        } else{
            $productIDFormPRST = getProductIDWithPRST($productID,$flavorSet[$k],$drinkSet[$k]);
            foreach ($productIDFormPRST as $productID){
                array_push($productOrderStock,[
                    "stockID"=>getStockID($productID),
                    "size"=>getSize($productID),
                    "quantity"=>$quantityList[$k],
                    "remain"=>getRemain(getStockID($productID))
                ]);
            }
        }
            /*************************
            *  1.get real productID form PRST FORM combine_SET (2 product id[s])
            *  2.use method get_size form product id that get form 1.
            *  3.get stock Id form real product ID
            *  4.
            *
            *****************************/
    }
    return $productOrderStock;
}

function getProductIDWithPRST($promotionSetID,$flavorSet,$drinkSet){
    $tableSize=[
        "01"=>"0M",
        "02"=>"0L",
        "03"=>"XL",
    ];
    $productIDs=[];
    $size = substr($promotionSetID,4,2);
    array_push($productIDs,"PC".$flavorSet.$tableSize[$size]);
    array_push($productIDs,"DR".$drinkSet.$tableSize[$size]);
    return $productIDs;
}

function getRemain($stockID){
    global $database;
    $conn = $database->getConnection();
    $remainSql = "SELECT Remain FROM G13_v_Stock WHERE StockID = '$stockID'";
    $remainResult = $conn->prepare($remainSql);
    $remainResult->execute();
    $remain = $remainResult->fetchAll(PDO::FETCH_BOTH);
    return $remain[0]["Remain"];
}
function updateStock($receiptID,$stockID,$amount){
    global $database;
    $conn = $database->getConnection();
    $stockInsertSql = "INSERT INTO G13_FNB_Stock_Transaction (receiptID,stockID,amount) VALUES ('$receiptID','$stockID','$amount')";
    $stockUpdate = $conn->prepare($stockInsertSql);
    $stockUpdate->execute();
}
function updateStockPO($POID,$stockID,$amount){
    global $database;
    $conn = $database->getConnection();
    $stockInsertSql = "INSERT INTO G13_FNB_Stock_Transaction (POID,stockID,amount) VALUES ('$POID','$stockID','$amount')";
    $stockUpdate = $conn->prepare($stockInsertSql);
    $stockUpdate->execute();
}


// $klein->respond('GET', '/g05/test_add_point', function ($request, $response, $service, $app, $validator) {
// $app->point->addPoint([
//   "type" => "Ticket",
//   "memberID" => "151",
//   "point" => "300",
//   "transactionID" => "X01AB"
// ]);
// // });
// $recommend = "SELECT productName FROM G13_FNB_ProductList as s, G13_v_recommend_product as r WHERE r.cusID = '$cusID' and s.productID = r.productID "
// $addPoint = "INSERT INTO G05_Member_FNB_transaction (FNBTransactionNo,Point) VALUES ('$receiptID','$')"
// $redeemPoint = "INSERT INTO G05_Member_Redeem_Transaction (MemberID,Date,Type,Point) VALUES ('$cusID',NOW(),'$','$','$')"

function updateAllOrderStock($receiptID,$productOrderForStock){
    foreach ($productOrderForStock as $product){
        updateStock($receiptID,$product["stockID"],$product["size"]*$product["quantity"]*-1);
      }
}
function getRecommend ($cusID){
    global $database;
    $conn = $database->getConnection();
//    $service->validateParam('cusID', 'Bad Request')->notNull();
//    $cusID=$request->cusID;
    $recommendSql = "SELECT productName FROM G13_FNB_ProductList as s, G13_v_recommend_product as r WHERE r.cusID = '$cusID' and s.productID = r.productID ";
    $recommendResult = $conn->prepare($recommendSql);
    $recommendResult->execute();
    $recommend = $recommendResult->fetchAll(PDO::FETCH_BOTH);
    if(!(bool)$recommend)
        return "nothing";
    $recommend = $recommend[0];
  return $recommend["productName"];
}


function getPointName ($cusID){
    global $database;
    $conn = $database->getConnection();
    $PointSql = "SELECT totalpoint FROM G05_totalpoint WHERE MemberID=$cusID";
    $Points = $conn->prepare($PointSql);
    $Points->execute();
    $Points = $Points->fetchAll(PDO:: FETCH_BOTH);
    if(!(bool)$Points)
        $Points=0;
    else
    {
        $Points = $Points[0];
        $Points = $Points["totalpoint"];
    }



    $NameSql = "SELECT Lname,Fname FROM G05_Member_profile WHERE MemberID=$cusID";
    $Name = $conn->prepare($NameSql);
    $Name->execute();
    $Name = $Name->fetchAll(PDO:: FETCH_BOTH);
    if(!(bool)$Name)
        $Name="Not Member";
    else{
        $Name = $Name[0];
        $Name = $Name["Fname"].' '.$Name["Lname"];
    }

    $data["name"] = $Name;
    $data["points"]=$Points;
    return $data;
}
