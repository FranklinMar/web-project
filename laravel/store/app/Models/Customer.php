<?php 

namespace App\Models;

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
      $_SESSION['customers-email'] = [];
      $_SESSION['customers-password'] = [];
    }
    $_SESSION['customers-login'][$this->id] = $this->login;
    $_SESSION['customers-email'][$this->id] = $this->email;
    $_SESSION['customers-password'][$this->id] = $this->password;
    // if (!isset($_SESSION['customers'])) {
    //   $_SESSION['customers'] = [];
    // }
    // $_SESSION['customers'][$this->id] = $this;
  }

  public static function inLogins(string $login): bool{
    if(!isset($_SESSION['customers-login'])) {
      return false;
    }
    // return in_array($login, $_SESSION['customers-login']);
    foreach($_SESSION['customers-login'] as $i => $log){
      if ($log == $login) {
        return true;
      }
    }
    return false;
  }

  public static function validate(string $login, string $password): bool {
    if (!Customer::inLogins($login)){ 
      return false;
    }
    $array = $_SESSION['customers-login'];
    $id = array_search($login, $array);
    $pass = $_SESSION['customers-password'][$id];
    return $pass == $password;
    // $customer = null;
    // foreach ($array as $id => $custom) {
    //   if ($custom->login == $login){
    //     $customer = $custom;
    //   }
    // }
    // if (!$customer){
    //     return false;
    // }
    // return $customer->password == $password;
  }
}

?>