<?php

namespace App\Http\Controllers;

use App\Models\Baskets;
use App\Models\Customers;
use App\Models\Games;
use Illuminate\Http\Request;

class BasketController extends Controller {

  public function basket(){
    if(!session()->has('login') && !session()->has('password')) {
      return redirect('/login');
    }
    $login = session()->get('login', '')[0];
    $customer = Customers::findByLogin($login);
    $baskets = Baskets::all()->where('idCustomer', $customer->id)->where('payed', false);
    $games = [];
    foreach($baskets as $basket) {
      array_push($games, Games::find($basket->idGame));
    }

    $total = 0.0;
    foreach($games as $game) {
      $total += ((double) $game->price);
    }

    return view('basket', ['games' => $games, 'customer' => $customer, 'total' => $total]);
  }

  public function buy(Request $request) {
    $idGame = $request->input('idGame');
    $game = Games::find($idGame);

    $customer = Customers::findByLogin(session()->get('login', '')[0]);

    if (!$customer){
     return redirect('/logout');
    }


    if ($customer->money >= $game->price) {
      $customer->money -= $game->price;
      $basket = Baskets::all()->where('idCustomer', $customer->id)->where('idGame', $game->id)->first();
      $basket->payed = true;
      $basket->save();
      $customer->save();
    }
    return redirect('/basket');
  }
  
  public function delete(Request $request) {
    $idGame = $request->input('idGame');
    $game = Games::find($idGame);

    $customer = Customers::findByLogin(session()->get('login', '')[0]);

    if (!$customer){
     return redirect('/logout');
    }

    $customer->games()->detach($game);
    
    
    return redirect('/basket');
  }

  public function buyAll(Request $request) {
    $idCustomer = $request->input('idCustomer');

    $customer = Customers::find($idCustomer);

    if (!$customer){
     return redirect('/logout');
    }

    $baskets = Baskets::all()->where('idCustomer', $customer->id)->where('payed', false);
    $total = 0.0;
    foreach($baskets as $basket) {
      $total += ((double) $basket->game->price);
    }

    if ($customer->money >= $total) {
      $customer->money -= $total;
      foreach($baskets as $basket){
        $basket->payed = true;
        $basket->save();
      }
      $customer->save();
    }
    return redirect('/basket');
  }
  
  public function deleteAll(Request $request) {
    $idCustomer = $request->input('idCustomer');

    $customer = Customers::find($idCustomer);

    if (!$customer){
     return redirect('/logout');
    }
    $baskets = Baskets::all()->where('idCustomer', $customer->id)->where('payed', false);
    foreach($baskets as $basket){
      $basket->delete();
    }
    
    return redirect('/basket');
  }
}
