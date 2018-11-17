<?php
/**
 *
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

  public function perform($username, $password){
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
      // echo "<pre>";
      // var_dump($this->klein);
      // echo "</pre>";
      // die;
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
