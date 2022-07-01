<?php

namespace App\Http\Controllers;

use App\Models\Games;

class ShopController extends Controller {

  function shop(){
    return view('shoppart', ['games' => Games::all()]);
  }

  public function game($id) {
    // $game = ;
    return view('game', ['game' => Games::find($id)]);
  }
}

?>