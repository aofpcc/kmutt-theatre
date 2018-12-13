<?php
$klein->respond('GET', '/fnb', function ($request, $response, $service) {
  $service->bootstrap3 = false;
  global $database;
  $conn = $database->getConnection();

  // $query = "select id, name, price from product_fnb";
  // $stmt = $conn->prepare($query);
  // $stmt->execute();
  //
  // $num = $stmt->rowCount();
  // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);

  // $service->allProducts = $arr;
  // $service->pageTitle = 'Group 13';
  // $service->render('layouts/group13/viewAll.php');
  $service->render('layouts/group13/index.php');
});
//
// $klein->respond('GET', '/emp/fnb/add', function ($request, $response, $service) {
//   $service->pageTitle = 'Group 13';
//   $service->render('layouts/group13/addProduct.php');
// });
//
// $klein->respond('POST', '/emp/fnb/add', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();
//
//   if(empty($request->name)) {
//     return "error";
//   }
//
//   try {
//     $sql = "insert into product_fnb(name, price) values ('".$request->name."', ".$request->price.");";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//   } catch (\Exception $e) {
//     return "error";
//   }
//
//   $service->pageTitle = 'Group 13';
//   $service->render('layouts/group13/addProduct.php');
// });

// $klein->respond('GET', '/emp/fnb', function ($request, $response, $service) {
//   global $database;
//   $conn = $database->getConnection();
//
//   // $query = "select id, name, price from product_fnb";
//   // $stmt = $conn->prepare($query);
//   // $stmt->execute();
//   //
//   // $num = $stmt->rowCount();
//   // $arr = $stmt->fetchAll(PDO::FETCH_BOTH);
//
//   // $service->allProducts = $arr;
//   // $service->pageTitle = 'Group 13';
//   // $service->render('layouts/group13/viewAll.php');
//   $service->render('layouts/group13/index.php');
// });

$klein->respond('POST', '/emp/fnb/checkcoupon', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('couponcode', 'Bad Request')->notNull();

  $couponcode= $request->couponcode;
  $sql = "select * from promotion where codeID = '$couponcode'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();

  if ($num > 0) {
    $row = $result->fetch_assoc();
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

$klein->respond('POST', '/emp/fnb/checkcusid', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('CusID', 'Bad Request')->notNull();

  $CusID= $request->CusID;
  $sql = "select * from Membership where ID = '$CusID'";
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

$klein->respond('POST', '/emp/fnb/checkemp', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('empID', 'Bad Request')->notNull();

  $empID= $request->empID;

  $sql = "select * from employee where EmpID = '$empID'";
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

$klein->respond('POST', '/emp/fnb/getprice', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('productID', 'Bad Request')->notNull();

  $productID=$request->productID;
  $sql = "select * from productList_fnb where productID = '$productID'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $num = $stmt->rowCount();

  if ($num > 0) {
    $row = $stmt->fetchAll(PDO::FETCH_BOTH);
    $row=$row[0];
    $price = $row['price_per_unit'];
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

$klein->respond('POST', '/emp/fnb/do_order', function ($request, $response, $service, $app, $validator) {
  global $database;
  $conn = $database->getConnection();

  $service->validateParam('empID', 'Bad Request')->notNull();
  $service->validateParam('CusID', 'Bad Request');
  $service->validateParam('payment', 'Bad Request')->notNull();
  $service->validateParam('item', 'Bad Request')->notNull();
  $service->validateParam('product', 'Bad Request')->notNull();

  $empID = $request->empID;
  $CusID = $request->CusID;
  $payment = $request->payment;
  $item = $request->item;
  $product= $request->product;

  $sql = "INSERT INTO orderList_fnb(cusID,empID,paymentType,Time,Date) values('$CusID','$empID','$payment',NOW(),NOW())";
  $order = "SELECT max(receiptID) as receiptID FROM orderList_fnb";

  $conn->beginTransaction();

  try {
    $conn->exec($sql);

    $orderresult = $conn->prepare($order);
    $orderresult->execute();
    $row = $orderresult->fetchAll(PDO::FETCH_BOTH);
    $row = $row[0];

    $orderID =  $row['receiptID'];
    for($i=0; $i<count($item);$i++){
      $data ="INSERT INTO detail_fnb (receiptID,productID,unitOfProduct) VALUES('$orderID','$product[$i]','$item[$i]')";
      $a = $conn->prepare($data);
      $a->execute();
    }
    $conn->commit();
    echo '<script type="text/javascript">',
    'alert("Success");',
    '</script>';
    // $response->redirect("/emp/fnb");
    // $response->sendHeaders();
    // echo $orderID;

  } catch(PDOException $e) {
    $conn->rollback();
    echo '<script type="text/javascript">',
    'alert("Error '.$e->getMessage().'");',
    '</script>';
    // $response->redirect("/emp/fnb");
    // $response->sendHeaders();
  }
});
