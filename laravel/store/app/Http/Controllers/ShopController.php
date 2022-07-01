<?php

namespace App\Http\Controllers;

use App\Models\Baskets;
use App\Models\Customers;
use App\Models\Games;
use Illuminate\Http\Request;

class ShopController extends Controller {

  public function shop() {
    return view('shoppart', ['games' => Games::all()]);
  }

  public function game($id) {
    return view('game', ['game' => Games::find($id)]);
  }

  public function addtobasket(Request $request) {
    $idGame = $request->input('idGame');
    $game = Games::find($idGame);

    $customer = Customers::findByLogin(session()->get('login', '')[0]);

    if (!$customer){
     return redirect('/logout');
    }

    $basket = Baskets::create([
     'idCustomer' => $customer->id,
     'idGame' => $game->id,
     'payed' => false
    ]);

    return redirect('/basket');
  }
}
