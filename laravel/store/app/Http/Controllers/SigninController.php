<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customers;
use Illuminate\Http\Request;

class SignInController extends Controller {

  public function login(){
    // unset($_COOKIE['password']);
    // session_start();
    // if (Cookie::has('login') && Cookie::has('password')){
    // if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    if(session()->has('login') && session()->has('password')) {
    // if(Session::has('login') && Session::has('password')) {
      return redirect('/basket');
    }
    return view("login", ['boolean' => true]);
  }

  public function signup(){
    // session_start();
    // if(Cookie::has('login') && Cookie::has('password')){
    // if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    if(session()->has('login') && session()->has('password')) {
    // if(Session::has('login') && Session::has('password')) {
      return redirect('/basket');
    }
    return view("login", ['boolean' => false]);
  }

  public function loginPost(Request $request){
    // session_start();
    $request->validate([
      'login' => 'required',
      'password' => 'required'
    ]);

    $login = $request->input('login');
    $password = $request->input('password');
    $error = null;
    if (Customers::findByLogin($login)){
      if (Customers::authorize($login, $password)){
        $request->session()->push('login', $login);
        $request->session()->push('password', $password);
        // setcookie('login',$request->input('login'));
        // setcookie('password',$request->input('password'));
        // Session::put('login', $login);
        // Session::put('password');
        return redirect("/shop");
      } else {
        $error = "Невірний пароль";
      }
    } else {
      $error = "Даного логіна не існує";
    }
    return view("login", ['boolean' => true, 'error' => [$error]]);
  }

  public function signupPost(Request $request){
    $request->validate([
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
    $errors = null;

    if(Customers::findByLogin($login)){
      // return view("login", ['boolean' => false, 'error' => 'Даний логін зайнятий']);
      if (!$errors){
        $errors = [];
      }
      array_push($errors, 'Даний логін зайнятий');
    }

    if($password != $confirmpwd) {
      if (!$errors){
        $errors = [];
      }
      // return view("login", ['boolean' => false, 'error' => 'Паролі не збігаються']);
      // $error .= ' Паролі не збігаються';
      array_push($errors, 'Паролі не збігаються');
    }
    
    if ($errors) {
      return view("login", ['boolean' => false, 'error' => $errors]);
    }
    // $customer = new Customers();
    // $customer->login = $login;
    // $customer->email = $email;
    // $customer->password = $password;
    // $customer->save();
    // $customer = new Customers([$login, $email, $password]);
    $customer = Customers::create([
      'login' => $login,
      'email' => $email,
      'password' => $password
    ]);
    $request->session()->push('login', $login);
    $request->session()->push('password', $password);
    // $customer = n;ew Customer($login, $email, $password);
    // setcookie('login', $login);
    // setcookie('password', $password);
    // Session::put('login', $login);
    // Session::put('password', $password);
    // return view("login", ['boolean' => false]);
    return redirect("/shop");
  }

  public function logout(/*Request $request*/){
      // setcookie('login', null);
      // unset($_COOKIE['login']);
      // unset($_COOKIE['password']);
      // $request->session()->forget('login');
      // $request->session()->forget('password');
      session()->forget('login');
      session()->forget('password');
      // Session::forget('login');
      // Session::forget('password');
      // Session::flush();
      // Cookie::queue(Cookie::forget('login'));
      // Cookie::queue(Cookie::forget('password'));
      return redirect("/welcome");
  }


  // public function loginPost(Request $request){
  //   // session_start();
  //   $validation = $request->validate([
  //     'login' => 'required',
  //     'password' => 'required'
  //   ]);

  //   // $login = $_POST["login"];
  //   // $password = $_POST['password'];
  //   $login = $request->input('login');
  //   $password = $request->input('password');
  //   $error = null;
  //   if (Customer::inLogins($login)){
  //     if (Customer::validate($login, $password)){
  //       setcookie('login',$request->input('login'));
  //       setcookie('password',$request->input('password'));
  //       return view("login", ['boolean' => true, 'success' => 'Ви увійшли в акаунт!Вітаємо '.$login.'!']);
  //     } else {
  //       $error = "Невірний пароль";
  //     }
  //   } else {
  //     $error = "Даного логіна не існує";
  //     // print_r($_SESSION['customers-login']);
  //   }
  //   return view("login", ['boolean' => true, 'error' => $error]);
  //   // return redirect('/login/error')->with('error', $error);
  // }

  // public function signupPost(Request $request){
  //   // session_start();
  //   $validation = $request->validate([
  //       'loginreg' => 'required',
  //       'email' => 'required',
  //       'pwd1' => 'required',
  //       'pwd2' => 'required',
  //   ]);
  //   // $loginreg = $_POST["login"];
  //   // $email = $_POST["email"];
  //   // $pwd1 = $_POST["pwd1"];
  //   // $pwd2 = $_POST["pwd2"];
  //   $login = $request->input('loginreg');
  //   $email = $request->input('email');
  //   $password = $request->input('pwd1');
  //   $confirmpwd = $request->input('pwd2');

  //   $error = null;

  //   if(Customer::inLogins($login)){
  //     // return view("login", ['boolean' => false, 'error' => 'Даний логін зайнятий']);
  //     if (!$error){
  //       $error = [];
  //     }
  //     array_push($error, 'Даний логін зайнятий');
  //   }

  //   if($password != $confirmpwd) {
  //     if (!$error){
  //       $error = [];
  //     }
  //     // return view("login", ['boolean' => false, 'error' => 'Паролі не збігаються']);
  //     // $error .= ' Паролі не збігаються';
  //     array_push($error, 'Паролі не збігаються');
  //   }
    
    
  //   if ($error) {
  //     return view("login", ['boolean' => false, 'error' => $error]);
  //   }
  //   $customer = new Customer($login, $email, $password);
  //   setcookie('login', $login);
  //   setcookie('password', $password);
  //   return view("login", ['boolean' => false, 'success' => 'Ви успішно зареєструвалися!Вітаємо '.$login.'!']);
  // }

  // public function logError(){
  //   if (isset($error)){
  //     return view("login", ['boolean' => true, 'error' => $error]);
  //   } else {
  //     return redirect([SignInController::class, 'login']);
  //   }
  // }
}