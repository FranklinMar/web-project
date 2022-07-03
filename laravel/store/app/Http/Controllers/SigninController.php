<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use App\Models\Customer;
use App\Models\Customers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignInController extends Controller
{

  public function login()
  {
    session()->forget('verified');
    session()->forget('code');
    session()->forget('attempts');
    if (session()->has('login') && !session()->has('password')){
      session()->forget('login');
    }
    // if (session()->has('code')) {
      // session()->forget('code');
      // session()->forget('attempts');
    // }
    if (session()->has('login') && session()->has('password')) {
      return redirect('/basket');
    }
    return view("login", ['boolean' => true]);
  }

  public function signup()
  {
    // if (session()->has('login') && !session()->has('password')){
      // session()->forget('login');
    // }
    
    // if (session()->has('code')) {
      // session()->forget('code');
      // session()->forget('attempts');
    // }
    session()->forget('verified');
    session()->forget('code');
    session()->forget('attempts');
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
      array_push($errors, 'Паролі не співпадають');
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

  public function showVerify() {
    if (session()->has('attempts') && session()->get('attempts', [0])[0] != 3) {
      return view('logverify', ['error' => "Невірний код! Кількість спроб, що залишилася - ".session()->get('attempts', [0])[0].'.']);
    }
    return view('logverify');
  }

  public function loginVerify(Request $request) {
    $login = $request->input('login');

    if (!Customers::findByLogin($login)) {
      return view('logverify', ['error' => 'Акаунту з таким логіном не існує.']);
    }
    session()->push('login', $login);
    $code = rand(1000, 9999);
    // Mail::to()
    // Mail::to($login)->send(new VerifyMail($code));
    Mail::to('fake@mail.com')->send(new VerifyMail($login, $code));
    session()->push('code', $code);
    session()->push('attempts', 3);
    // return redirect()->action([self::class, 'insertLogin']);
    return view('logverify');
  }

  public function codeVerify(Request $request) {
    // $login = session()->get('login', '')[0];
    $code = $request->input('code');

    if ($code != session()->get('code', [0])[0]) {
      // $attempts = null;
      // if (session()->has('attempts')) {
        $attempts = session()->pull('attempts', [0])[0];
        if ($attempts == 1) {
          session()->forget('login');
          session()->forget('code');
          session()->forget('attempts');
          return redirect('/login');
        }
        $attempts--;
        // session()->forget('attempts');
        session()->push('attempts', $attempts);
      // } else {
      //   session()->push('attempts', 3);
      // }
      return redirect('/login/verify/code');
    }
    // return redirect('/login/verify/reset');
    // return view('resetpass');
    session()->forget('code');
    session()->forget('attempts');
    session()->push('verified', false);
    return redirect('/login/verify/reset');
  }

  public function resetPassword() {
    if (!(session()->has('login') && session()->has('verified'))) {
      return redirect('/login');
    }
    if (session()->has('passwordError')) {
      $error = session()->get('passwordError', '')[0];
      session()->forget('passwordError');
      return view('resetpass', ['error' => $error]);
    }
    return view('resetpass');
  }

  public function confirmPassword(Request $request) {
    $password = $request->input('pwd1');
    $confirmpwd = $request->input('pwd2');

    if ($password != $confirmpwd) {
      session()->push('passwordError', "Паролі не співпадають");
      return redirect()->action([self::class, 'resetPassword']);
    }
    try {
      $customer = Customers::findByLogin(session()->get('login', '')[0]);
      $customer->password = $password;
      $customer->save();
      session()->push('password', $password);
    } catch(Exception $e) {
      return redirect('/login');
    }
    session()->forget('verified');
    return redirect('/basket');
  }

  public function logout()
  {
    session()->forget('login');
    session()->forget('password');
    return redirect("/welcome");
  }
}
