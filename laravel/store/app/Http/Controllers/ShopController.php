<?php

namespace App\Http\Controllers;

use App\Models\Baskets;
use App\Models\Customers;
use App\Models\Games;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller {

  public function shop() {
    $games = Games::all()->slice(0, 14);
    $discounts = Category::find(2)->games;
    $news = Category::find(1)->games;
    return view('shop', ['displayGames' => $games->slice(0, 4), 'games' => $games/*->slice(4)*/,
  'discounts' => $discounts/*->slice(0, 4)*/, 'news' => $news/*->slice(0, 3)*/]);
  }

  public function shoppart() {
    $games = Games::all()->slice(0, 14);
    return view('shoppart', ['displayGames' => $games->slice(0, 4), 'games' => $games->slice(4)]);
    // return view('shoppart', ['games' => Games::all()->slice(0, 10)]);
  }

  public function game($id) {
    return view('game', ['game' => Games::find($id)]);
  }

  public function addtobasket(Request $request) {
    if(!session()->has('login') && !session()->has('password')) {
      return redirect('/login');
    }
    $idGame = $request->input('idGame');
    $game = Games::find($idGame);

    $customer = Customers::findByLogin(session()->get('login', '')[0]);

    if (!$customer) {
     return redirect('/logout');
    }

    $basket = Baskets::create([
     'idCustomer' => $customer->id,
     'idGame' => $game->id,
     'payed' => false
    ]);

    return redirect('/basket');
  }

  public function search(Request $request) {
    $request->validate([
      'search' => 'required'
    ]);
    $regex = "/[-_$%\"\':;,.\/?!|\s]/";//"[:;,./?!|\\s+]"
    $search = strtolower(trim(preg_replace($regex, "", $request->input('search'))));
    $games = Games::all();
    // $search = 
    foreach($games as $game) {
      // $game->name = preg_replace("[:;,./?!|\\s+]", "", $game->name);
      // if(strcasecmp(trim(preg_replace("[:;,./?!|\\s+]", "", $game->name)), $search) == 0){
      //   return redirect("/game/{$game->id}");
      // }
      if(str_contains(strtolower(trim(preg_replace($regex, "", $game->name))), $search)){
        return redirect("/game/{$game->id}");
      }
    }
    return view('empty', ['search' => $request->input('search')]);
  }

  public function list() {
    return view('gamelist', ['games' => Games::all()]);
  }
}
