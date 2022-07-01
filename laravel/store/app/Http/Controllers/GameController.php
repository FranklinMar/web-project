<?php

namespace App\Http\Controllers;

use App\Models\Games;

class GameController extends Controller {

  public function game($id) {
    // $game = ;
    return view('game', ['game' => Games::find($id)]);
  }

}