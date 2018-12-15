<?php
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$klein->respond('GET', '/group8/gen', function ($request, $response, $service) {
    global $database;
    $conn = $database->getConnection();
    $rand = RandomString();
    $query = "SELECT PromoName from Promotion where PromoID = 10 ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $num = $stmt->rowCount();
    $arr = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo ($arr["PromoName"])."<br>";
    // echo $rand ;

    try {
        $sql = "INSERT INTO CodeID (Code, Status)
          VALUES ('$rand', '1')";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $service->rand = $rand;
    $service->pageTitle = 'Hello';
    $service->render('layouts/group8/New.php');
});
