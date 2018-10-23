<?php
class Database{

    // specify your own database credentials
    private $host = "10.4.56.40";
    private $db_name = "theatre";
    private $username = "user01";
    private $password = "user01";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES => false
            ));
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
