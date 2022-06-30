<?php

namespace App\Http\Controllers; 

class SignInController extends Controller {

  public function login(){
    return view("login", ['boolean' => true, 'error' => false]);
  }

  public function signup(){
    return view("login", ['boolean' => false, 'error' => false]);
  }
}