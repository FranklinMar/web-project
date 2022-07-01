<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Games;

class BasketController extends Controller {

  function basket(){
    if(!session()->has('login') && !session()->has('password')) {
      return redirect('/login');
    }
    $login = session()->get('login', '')[0];
    $customer = Customers::findByLogin($login);
    $games = $customer->games;
    for ($i = 0; $i < count($games); $i++) {
      if ($games[$i]->payed) {
        unset($games[$i]);
      }
    }
    $total = 0.0;
    foreach($games as $game) {
      $total += ((double) $game->price);
    }
    return view('basket', ['games' => $games, 'customer' => $customer, 'total' => $total]);
  }
}

?>