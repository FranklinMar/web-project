<?php

namespace App\Http\Controllers; 

class GeneralController extends Controller {

  public function welcome() {
    return view('welcome');
  }

  public function aboutus() {
    return view("aboutus");
  }

  public function shop(){
    return view("shoppart");
  }

  public function login(){
    return view("login");
  }

  public function signup(){
    return view("login");
  }

}