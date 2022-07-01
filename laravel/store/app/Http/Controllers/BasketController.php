<?php

namespace App\Http\Controllers;

use App\Models\Games;

class BasketController extends Controller {

  function basket(){
    if(!session()->has('login') && !session()->has('password')) {
      return redirect('/login');
    }
    return view('basket');
  }
}

?>