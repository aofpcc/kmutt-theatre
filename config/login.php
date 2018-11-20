<?php
require_once __DIR__ . "/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php";
class MailSender
{
    public function sent($to, $header, $body)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
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

/**
* @author Bunyarit [github.com/aofpcc]
*
* The LoginPerformer is a performer of login which
* can handle about register, perform login, forget password, validateToken
*/
class LoginPerformer
{
    private $conn;
    private $klein;

    public function __construct($db, $klein)
    {
        $this->conn = $db->getConnection();
        $this->klein = $klein;
    }

    /**
    * @param string $hash is md5 of password
    **/
    public function validateToken($hash)
    {
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("SELECT password from core_password_table where password = :password");
            $stmt->bindParam(":password", $hash);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->fetchAll();
            // var_dump($stmt->rowCount());
            if ($stmt->rowCount() > 0) {
                $stmt = $this->conn->prepare("UPDATE core_user_table
          SET validated = 1
          WHERE userID = (select userID from core_password_table where password = :password)");
                $stmt->bindParam(":password", $hash);
                $stmt->execute();
            } else {
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
        } catch (Exception $e) {
            $this->conn->rollback();
            return [
              "validated" => false,
              "data" => $e->getMessage()
            ];
        }
    }

    public function resetPassword($base64)
    {
        try {
            $password = base64_decode($base64);
            $stmt = $this->conn->prepare("SELECT * from core_user_pwd where password = :password");
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                throw new \Exception("Incorrect Password", 1);
            }

            $result = $stmt->fetchAll();
            $userID = $result[0]["userID"];

            $_SESSION['role'] = $result[0]["role"];
            $_SESSION['userID'] = $result[0]["userID"];
            $_SESSION['username'] = $result[0]["username"];

            return [
          "change" => true,
          "userID" => $userID
        ];
        } catch (Exception $e) {
            return [
          "change" => false,
          "data" => $e->getMessage()
        ];
        }
    }

    public function setNewPassword($password)
    {
        try {
            $password = $this->md5($password);
            $stmt = $this->conn->prepare("INSERT into core_password_table(userID, password, create_date)
        values(:userID, :password, NOW());");
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":userID", $_SESSION['userID']);
            $stmt->execute();

            return [
          "update" => true
        ];
        } catch (Exception $e) {
            return [
          "update" => false
        ];
        }
    }

    public function changePassword($old, $new)
    {
        try {
            $md5 = $this->md5($old);
            $stmt = $this->conn->prepare("SELECT * from core_user_pwd where password = :password");
            $stmt->bindParam(":password", $md5);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                throw new \Exception("Incorrect Password", 1);
            }

            $result = $stmt->fetchAll();
            $userID = $result[0]["userID"];

            $newmd5 = $this->md5($new);
            $stmt = $this->conn->prepare("INSERT into core_password_table(userID, password, create_date)
          values(:userID, :password, NOW());");
            $stmt->bindParam(":password", $newmd5);
            $stmt->bindParam(":userID", $userID);
            $stmt->execute();

            return [
            "change" => true
          ];
        } catch (Exception $e) {
            return [
            "change" => false,
            "data" => $e->getMessage()
          ];
        }
    }

    /**
    * Still need to finish
    **/
    public function forgetPassword($email)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * from core_user_pwd where email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->fetchAll();
            if ($stmt->rowCount() == 0) {
                throw new \Exception("No any account belong to this email", 1);
            }
            $base64 = base64_encode($result[0]["password"]);

            $mail = new MailSender;
            $mail->SMTPDebug  = 2;
            $mail->sent($email, "Reset Password", "Please click <a href='http://".$_SERVER['HTTP_HOST']."/test/forgetPassword/reset/$base64'>this</a> to reset your password");
            return [
              "sent" => true
            ];
        } catch (Exception $e) {
            return [
              "sent" => false,
              "data" => $e->getMessage()
            ];
        }
    }

    public function register($username, $password, $email, $validateLink, $role)
    {
        try {
            $this->conn->beginTransaction();
            $md5 = $this->md5($password);
            // prepare sql and bind parameters
            $stmt = $this->conn->prepare("INSERT into core_user_table(username, email, role, create_date, validated)
          values(:username, :email, :role, NOW(), 0);");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':role', $role);
            $stmt->execute();
            $id = $this->conn->lastInsertId();
            $stmt = $this->conn->prepare("INSERT into core_password_table(userID, password, create_date)
          values(:userID, :password, NOW());");
            $stmt->bindParam(':userID', $id);
            $stmt->bindParam(':password', $md5);
            $stmt->execute();

            $mail = new MailSender;
            $mail->sent($email, "Verify Account", "<a href='http://".$_SERVER['HTTP_HOST']."$validateLink/$md5'>Verify Account</a>");
            $this->conn->commit();
            return [
              "created" => true ,
              "userID" => $id
            ];
        } catch (Exception $e) {
            $this->conn->rollback();
            return [
              "created" => false,
              "data" => $e->getMessage()
            ];
        }
    }

    public function perform($username, $password, $redirect)
    {
        try {
            $md5 = $this->md5($password);
            // prepare sql and bind parameters
            $stmt = $this->conn->prepare("SELECT * from
            core_user_pwd WHERE password = :password");
            $stmt->bindParam(':password', $md5);
            $stmt->execute();

            $num = $stmt->rowCount();
            $result = $stmt->fetchAll();

            if ($num == 1) {
                $_SESSION['login'] = true;
                $_SESSION['role'] = $result[0]["role"];
                $_SESSION['userID'] = $result[0]["userID"];
                $_SESSION['username'] = $result[0]["username"];
                $this->klein->response()->redirect($redirect);
                $this->klein->response()->sendHeaders();
            } else {
                throw new \Exception("Incorrect Username of Password", 1);
            }
        } catch (Exception $e) {
            $this->klein->service()->flash('Shit Wrong password');
            $this->klein->service()->back();
        }
    }

    public function requireLogin($role)
    {
        if (empty($_SESSION['login']) || $_SESSION['login'] != true || $_SESSION['role'] != $role) {
            if ($_SESSION['role'] != $role) {
                $this->klein->service()->flash('Shit Wrong Role, go to ask your father. What is ur role?');
            } else {
                $this->klein->service()->flash('Shit No Login, go to ask your daddy. how to login');
            }
            $this->klein->response()->redirect('/test/login');
            $this->klein->response()->sendHeaders();
        }

        $result = array(
          'userID' => $_SESSION['userID']
        );
        return $result;
    }

    public function logout() {
        $this->logoutThenGoTo('/test/');
    }
    public function logoutThenGoTo($redirectPath)
    {
        $_SESSION["login"] = false;
        session_destroy();
        $this->klein->response()->redirect($redirectPath);
        $this->klein->response()->sendHeaders();
    }

    private function md5($string)
    {
        return md5($string);
    }
}
