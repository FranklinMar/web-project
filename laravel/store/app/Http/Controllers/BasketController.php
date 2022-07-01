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
    // $games = $customer->games;
    // $games_unpayed = [];
    // foreach ($games as $game) {
      // if ($game->payed != true) {
        // unset($games[$i]);
        // array_push($games_unpayed, $game);
      // }
    // }
    $total = 0.0;
    foreach($games as $game) {
      $total += ((double) $game->price);
    }
    // $array = ['games' => $games, 'customer' => $customer, 'total' => $total];
    // if ($error) {
      // $array['error'] = $error;
    // }
    // return view('basket', $array);
    return view('basket', ['games' => $games, 'customer' => $customer, 'total' => $total]);
  }

  public function buy(Request $request) {
    // $request->validate(['idGame' => 'required']);

    // $idGame = $request->idGame;//input('idGame')
    $idGame = $request->input('idGame');
    $game = Games::find($idGame);

    $customer = Customers::findByLogin(session()->get('login', '')[0]);

    if (!$customer){
     return redirect('/logout');
    }

    // $basket = $customer->basket;

    if ($customer->money >= $game->price) {
      $customer->money -= $game->price;
      $basket = Baskets::all()->where('idCustomer', $customer->id)->where('idGame', $game->id)->first();
      $basket->payed = true;
      $basket->save();
      // $basket->payed = true;
      $customer->save();
      // return redirect('/basket');
    }
    // session()->put('error' => 'Недостатньо коштів для придбання')
    return redirect('/basket');
    // $games = $customer->games;
    // for ($i = 0; $i < count($games); $i++) {
      // if ($games[$i]->payed) {
        // unset($games[$i]);
      // }
    // }
    // $total = 0.0;
    // foreach($games as $game) {
      // $total += ((double) $game->price);
    // }
    // return view('basket', ['error' => 'Недостатньо коштів для придбання', 'games' => $customer->games, 'total' => $total, 'customer' => $customer]);
    // return redirect('/shop');
    // return self::basket('Недостатньо коштів для придбання');
    // return redirect()->action(
      // [BasketController::class, 'basket'], ['error' => 'Недостатньо коштів для придбання']
    // )
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
    // $request->validate(['idGame' => 'required']);

    // $idGame = $request->idGame;//input('idGame')
    $idCustomer = $request->input('idCustomer');
    // $game = Games::find($idGame);

    $customer = Customers::find($idCustomer);

    if (!$customer){
     return redirect('/logout');
    }

    // $games = $customer->games;
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
      // $basket->payed = true;
      $customer->save();
      // return redirect('/basket');
    }
    // session()->put('error' => 'Недостатньо коштів для придбання')
    return redirect('/basket');
  }
  
  public function deleteAll(Request $request) {
    $idCustomer = $request->input('idCustomer');
    // $game = Games::find($idGame);

    $customer = Customers::find($idCustomer);

    if (!$customer){
     return redirect('/logout');
    }
    // $basket = $customer->basket;
    // $baskets = Baskets::all();
    // foreach ($baskets as $basket) {
      // if ($basket->idCustomer->id == $customer->id && $basket->idGame->)
    // }
    // $basket->delete();
    $baskets = Baskets::all()->where('idCustomer', $customer->id)->where('payed', false);
    foreach($baskets as $basket){
      $basket->delete();
    }
    // $customer->games()->detach();
    
    return redirect('/basket');
  }

  // protected function inArray($object, $array) {
  //   foreach($array as $item){
  //     if ($item->id == $object->id){
  //       return $object->id;
  //     }
  //   }
  //   return null;
  // }
}
