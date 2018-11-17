<?php
require_once __DIR__ . "/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php";
class MailSender {

  public function sent($to, $header, $body) {
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'theatre.cskmutt@gmail.com';                 // SMTP username
      $mail->Password = 'csc318sit';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('theatre.cskmutt@gmail.com', 'Admin');
      $mail->addAddress($to);
      $mail->addBCC('aofpc1@gmail.com');

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $header;
      $mail->Body    = $body;

      $mail->send();
      return true;
    } catch (Exception $e) {
      return false;
    }
  }
}

class LoginPerformer
{
  private $conn;
  private $klein;

  public function __construct($db, $klein)
  {
    $this->conn = $db->getConnection();
    $this->klein = $klein;
  }

  public function validateToken($hash) {
    try {
      $this->conn->beginTransaction();
      $stmt = $this->conn->prepare("SELECT password from core_password_table where password = :password");
      $stmt->bindParam(":password", $hash);
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->fetchAll();
      // var_dump($stmt->rowCount());
      if($stmt->rowCount() > 0) {
        $stmt = $this->conn->prepare("UPDATE core_user_table
          SET validated = 1
          WHERE userID = (select userID from core_password_table where password = :password)");
        $stmt->bindParam(":password", $hash);
        $stmt->execute();

      }else {
        $this->conn->rollback();
        return [
          "validated" => false,
          "data" => "No any token matched to this token"
        ];
      }

      $this->conn->commit();
      return [
        "validated" => true
      ];
    }
    catch(PDOException $e) {
      $this->conn->rollback();
      return [
        "validated" => false,
        "data" => $e->getMessage()
      ];
    }
  }

  public function forgotPwd($email) {

  }

  public function register($username, $password, $email) {
    try {
      $this->conn->beginTransaction();
      $md5 = $this->md5($password);
      // prepare sql and bind parameters
      $stmt = $this->conn->prepare("INSERT into core_user_table(username, email, create_date, validated)
        values(:username, :email, NOW(), 0);");
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      $id = $this->conn->lastInsertId();
      $stmt = $this->conn->prepare("INSERT into core_password_table(userID, password, create_date)
        values(:userID, :password, NOW());");
      $stmt->bindParam(':userID', $id);
      $stmt->bindParam(':password', $md5);
      $stmt->execute();

      $mail = new MailSender;
      $mail->sent($email, "Verify Account", "
      <a href='http://".$_SERVER['HTTP_HOST']."/verify/$md5'>Verify Account</a>
      ");

      $this->conn->commit();
      return [
        "created" => true
      ];
    }
    catch(PDOException $e)
    {
      $this->conn->rollback();
      return [
        "created" => false,
        "data" => $e->getMessage()
      ];
    }
  }

  public function perform($username, $password) {
    if($username == 'aofpcc') {
      $_SESSION['login'] = true;
      $_SESSION['role'] = 'customer';
      $this->klein->response()->redirect('/empGod/abc');
      $this->klein->response()->sendHeaders();
    }else{
      $this->klein->service()->flash('Shit Wrong password');
      $this->klein->service()->back();
    }
  }

  public function requireLogin($role) {
    if(empty($_SESSION['login']) || $_SESSION['login'] != true || $_SESSION['role'] != $role) {
      $this->klein->service()->flash('Shit No Login, go to ask your father. how to login');
      $this->klein->response()->redirect('/login');
      $this->klein->response()->sendHeaders();
    }

    $result = array(
      'userID' => 123456
    );
    return $result;
  }

  public function logout() {
    session_destroy();
    $this->klein->response()->redirect('/');
    $this->klein->response()->sendHeaders();
  }

  private function md5($string) {
    return md5($string);
  }

}
