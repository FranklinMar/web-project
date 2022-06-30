<?php 


class Customer {
  public int $id;
  public string $login;
  public string $email;
  public string $password;

  public function __construct(string $login, string $email, string $password) {
    $this->login = $login;
    $this->email = $email;
    $this->password = $password;

    if(isset($_SESSION['customers-login'])){
      $this->id = count($_SESSION['customers-login'])+1;
    } else {
      $this->id = 0;
      $_SESSION['customers-login'] = [];
    } 
    $_SESSION['customers-login'][$this->id] = $this->login;
    if (!isset($_SESSION['customers'])) {
      $_SESSION['customers'] = [];
    }
    $_SESSION['customers'][$this->id] = $this;
  }

  public static function validate(string $login, string $password): bool {
    if(!isset($_SESSION['customers-login']) || !in_array($login, $_SESSION['customers-login'])) {
      return false;
    }
    $array = $_SESSION['customers'];
    $customer = null;
    foreach ($array as $custom) {
      if ($custom->login == $login){
        $customer = $custom;
      }
    }
    if (!$customer){
        return false;
    }
    return $customer->password == $password;
  }
}

?>