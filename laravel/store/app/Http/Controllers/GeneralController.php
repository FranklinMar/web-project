<?php

namespace App\Http\Controllers;

use App\Models\Games;

class GeneralController extends Controller {

  public function welcome() {
    $minecraft = Games::all()->where('name', '=', 'Minecraft')->first();
    $portal = Games::all()->where('name', '=', 'Portal 2')->first();
    $terraria = Games::all()->where('name', '=', 'Terraria')->first();
    return view('welcome', ["minecraft" => $minecraft, "portal" => $portal, "terraria" => $terraria]);
  }

  public function aboutus() {
    return view("aboutus");
  }
}