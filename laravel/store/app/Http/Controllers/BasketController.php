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

    $array = ['games' => $games, 'customer' => $customer, 'total' => $total];

    if(session()->has('error')) {
      $array['error'] = session()->pull('error', '')[0];
    }

    return view('basket', $array);
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
      return view('payment', ['uuids' => collect([self::genUuid()])->all()]);
    } else {
      session()->push('error', 'Недостатньо коштів для придбання');
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
      $uuidArray = [];
      foreach($baskets as $basket){
        $basket->payed = true;
        $basket->save();
        array_push($uuidArray, self::genUuid());
      }
      $customer->save();
      return view('payment', ['uuids' => collect($uuidArray)->all()]);
    } else {
      session()->push('error', 'Недостатньо коштів для придбання');
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

  protected static function genUuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        mt_rand( 0, 0xffff ),

        mt_rand( 0, 0x0fff ) | 0x4000,

        mt_rand( 0, 0x3fff ) | 0x8000,

        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
}
