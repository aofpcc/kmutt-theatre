<?php
class PointManager
{
    private $conn;
    private $klein;

    public function __construct($db, $klein)
    {
        $this->conn = $db->getConnection();
        $this->klein = $klein;
    }

    public function getPoint($memberID) {
        $query = "SELECT * From G05_totalpoint WHERE memberID = :memberID";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":memberID", $memberID);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) == 0){
          return 0;
        }
        return $result[0]["totalpoint"];
    }

    //addPoint
    public function addPoint($input) // type memberID point transactionID
    {
        $result = [
            "result" => false
        ];
        // input as array ("TransactionID" => "", )
        try {
            $this->conn->beginTransaction();
            $query = "INSERT INTO G05_Member_Point_Transaction(Type, MemberID, Date)
            Values(:type, :memberID, now())";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":type", $input["type"]);
            $stmt->bindParam(":memberID", $input["memberID"]);
            $stmt->execute();
            $pointID = $this->conn->lastInsertId();
            switch ($input["type"]) {
                case "FNB": $this->addPointToFNB($pointID, $input["transactionID"], $input["point"]); break;
                case "Ticket":; $this->addPointToTicket($pointID, $input["transactionID"], $input["point"]); break;
            }
            $this->conn->commit();
            $result["result"] = true;
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->conn->rollback();
        }
        return $result;
    }

    private function addPointToFNB($pointID, $transactionID, $point)
    {
        $query = "INSERT INTO G05_Member_FNB_transaction(PointID, FNBTransactionNo, Point) Values(:pointID, :transaction, :point)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":pointID", $pointID);
            $stmt->bindParam(":transaction", $transactionID);
            $stmt->bindParam(":point", $point);
            $stmt->execute();
    }

    private function addPointToTicket($pointID, $transactionID, $point)
    {
        $query = "INSERT INTO G05_Member_Ticket_transaction(PointID, TicketTransactionNo, Point) Values(:pointID, :transaction, :point)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":pointID", $pointID);
            $stmt->bindParam(":transaction", $transactionID);
            $stmt->bindParam(":point", $point);
            $stmt->execute();
    }

    //decreasePoint
    public function subtractPoint($input)
    {
        $result = [
            "result" => false
        ];
        // input as array ("TransactionID" => "", )
        try {
            $this->conn->beginTransaction();
            $query = "INSERT INTO G05_Member_Redeem_Transaction(Type, MemberID, Date, Point)
            Values(:type, :memberID, now(), :point)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":type", $input["type"]);
            $stmt->bindParam(":memberID", $input["memberID"]);
            $stmt->bindParam(":point", $input["point"]);
            $stmt->execute();
            // $pointID = $this->conn->lastInsertId();
            $this->conn->commit();
            $result["result"] = true;
        } catch (Exception $e) {
            // echo $e->getMessage();
            $this->conn->rollback();
        }
        return $result;
    }
}
