<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class SignInController extends Controller {

  public function login(){
    // session_start();
    return view("login", ['boolean' => true]);
  }

  public function signup(){
    // session_start();
    return view("login", ['boolean' => false]);
  }

  public function loginPost(Request $request){
    // session_start();
    $validation = $request->validate([
      'login' => 'required',
      'password' => 'required'
    ]);

    // $login = $_POST["login"];
    // $password = $_POST['password'];
    $login = $request->input('login');
    $password = $request->input('password');
    $error = null;
    if (Customer::inLogins($login)){
      if (Customer::validate($login, $password)){
        setcookie('login',$request->input('login'));
        setcookie('password',$request->input('password'));
        return view("login", ['boolean' => true, 'success' => 'Ви увійшли в акаунт!Вітаємо '.$login.'!']);
      } else {
        $error = "Невірний пароль";
      }
    } else {
      $error = "Даного логіна не існує";
      // print_r($_SESSION['customers-login']);
    }
    return view("login", ['boolean' => true, 'error' => $error]);
    // return redirect('/login/error')->with('error', $error);
  }

  public function logError(){
    if (isset($error)){
      return view("login", ['boolean' => true, 'error' => $error]);
    } else {
      return redirect([SignInController::class, 'login']);
    }
  }

  public function signupPost(Request $request){
    // session_start();
    $validation = $request->validate([
        'loginreg' => 'required',
        'email' => 'required',
        'pwd1' => 'required',
        'pwd2' => 'required',
    ]);
    // $loginreg = $_POST["login"];
    // $email = $_POST["email"];
    // $pwd1 = $_POST["pwd1"];
    // $pwd2 = $_POST["pwd2"];
    $login = $request->input('loginreg');
    $email = $request->input('email');
    $password = $request->input('pwd1');
    $confirmpwd = $request->input('pwd2');

    $error = null;

    if(Customer::inLogins($login)){
      // return view("login", ['boolean' => false, 'error' => 'Даний логін зайнятий']);
      $error = 'Даний логін зайнятий';
    }

    if($password != $confirmpwd) {
      // return view("login", ['boolean' => false, 'error' => 'Паролі не збігаються']);
      $error .= ' Паролі не збігаються';
    }
    
    
    if ($error) {
      return view("login", ['boolean' => false, 'error' => $error]);
    }
    $customer = new Customer($login, $email, $password);
    setcookie('login', $login);
    setcookie('password', $password);
    return view("login", ['boolean' => false, 'success' => 'Ви успішно зареєструвалися!Вітаємо '.$login.'!']);
  }
}