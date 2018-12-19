<?php
class Promotion
{
    private $conn;
    private $klein;

    public function __construct($db, $klein)
    {
        $this->conn = $db->getConnection();
        $this->klein = $klein;
    }

    public function useCode($memberID, $promoCode)
    {
        $result = [
            "result" => false,
            "message" => "",
        ];
        try {
            $conn = $database->getConnection();
            //
            // CURRENT POINTS
            //
            $sql = "SELECT totalpoint FROM G05_totalpoint,G08_Promo_main where MemberId = $memberID ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($list);
            $currentPoint = $list[0]["totalpoint"];
            //
            // REQUIRED POINTS
            //
            $sql2 = "SELECT PointUsed FROM G08_Promo_main where PromoCode = $promoCode ";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute();
            $list = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($list);
            $requiredPoint = $list[0]["PointUsed"];
            // $getpoint = $request->getpoint($stmt);
            // $point = $app->point->getPoint("151");

            // $point= $request->$sql2;
            if ($currentPoint >= $requiredPoint) {
                $newpoint = $currentPoint - $requiredPoint;
                $sql = "INSERT INTO G05_Member_Redeem_Transaction(MemberID,Point)
      VALUES('$request->ID','$newpoint')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $service->flash("success");

            } else {
                $service->flash("you have not enough point");
            }
        } catch (Exception $e) {
          $result["message"] = $e->getMessage();
        }
        return $result;
    }

    public function getCode(){
        return "kuy";
    }
}
