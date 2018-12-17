<?php
function generateRandomString($length = 6)
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
    $rand = generateRandomString();

    // echo ($arr["PromoName"])."<br>";
    // echo $rand ;

    try {
        $sql = "INSERT INTO G08_Promo_code (Code, Status)
          VALUES ('$rand', '1')";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        $service->flash("Failed to add promotion");
        //echo $sql . "<br>" . $e->getMessage();
    }
    $service->rand = $rand;
    $service->pageTitle = 'Hello';
    $service->render('layouts/group8/New.php');
});
