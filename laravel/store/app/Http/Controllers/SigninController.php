<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class SignInController extends Controller {

  public function login(){
    return view("login", ['boolean' => true, 'error' => false]);
  }

  public function signup(){
    return view("login", ['boolean' => false, 'error' => false]);
  }

  public function loginPost(Request $request){
    $validation = $request->validate([
      'login' => 'required',
      'password' => 'required'
    ]);

    $login = $_POST["login"];
    $password = $_POST['password'];
    // Customer::validate($login, $password);

  }

  public function signupPost(Request $request){
    $validation = $request->validate([
        'loginreg' => 'required',
        'email' => 'required',
        'pwd1' => 'required',
        'pwd2' => 'required',
    ]);
    $loginreg = $_POST["login"];
    $email = $_POST["email"];
    $pwd1 = $_POST["pwd1"];
    $pwd2 = $_POST["pwd2"];
  }
}