<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customers;
use Illuminate\Http\Request;

class SignInController extends Controller
{

  public function login()
  {
    if (session()->has('login') && session()->has('password')) {
      return redirect('/basket');
    }
    return view("login", ['boolean' => true]);
  }

  public function signup()
  {
    if (session()->has('login') && session()->has('password')) {
      return redirect('/basket');
    }
    return view("login", ['boolean' => false]);
  }

  public function loginPost(Request $request)
  {
    $request->validate([
      'login' => 'required',
      'password' => 'required'
    ]);

    $login = $request->input('login');
    $password = $request->input('password');
    $error = null;
    if (Customers::findByLogin($login)) {
      if (Customers::authorize($login, $password)) {
        session()->push('login', $login);
        session()->push('password', $password);
        return redirect("/shop");
      } else {
        $error = "Невірний пароль";
      }
    } else {
      $error = "Даного логіна не існує";
    }
    return view("login", ['boolean' => true, 'error' => [$error]]);
  }

  public function signupPost(Request $request)
  {
    $request->validate([
      'loginreg' => 'required',
      'email' => 'required',
      'pwd1' => 'required',
      'pwd2' => 'required',
    ]);
    $login = $request->input('loginreg');
    $email = $request->input('email');
    $password = $request->input('pwd1');
    $confirmpwd = $request->input('pwd2');
    $errors = null;

    if (Customers::findByLogin($login)) {
      if (!$errors) {
        $errors = [];
      }
      array_push($errors, 'Даний логін зайнятий');
    }

    if ($password != $confirmpwd) {
      if (!$errors) {
        $errors = [];
      }
      array_push($errors, 'Паролі не збігаються');
    }

    if ($errors) {
      return view("login", ['boolean' => false, 'error' => $errors]);
    }
    $customer = Customers::create([
      'login' => $login,
      'email' => $email,
      'password' => $password
    ]);
    session()->push('login', $login);
    session()->push('password', $password);
    return redirect("/shop");
  }

  public function logout()
  {
    session()->forget('login');
    session()->forget('password');
    return redirect("/welcome");
  }
}
