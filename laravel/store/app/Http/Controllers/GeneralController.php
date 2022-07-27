<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Customers;

class GeneralController extends Controller {

  public function welcome() {
    $minecraft = Games::all()->where('name', '=', 'Minecraft')->first();
    $portal = Games::all()->where('name', '=', 'Portal 2')->first();
    $terraria = Games::all()->where('name', '=', 'Terraria')->first();
    $array = ["minecraft" => $minecraft, "portal" => $portal, "terraria" => $terraria];
    if (session()->has('login') && session()->has('password')) {
      $array["customer"] = Customers::findByLogin(session()->get('login')[0]);
    }
    return view('welcome', $array);
  }

  public function aboutus() {
    return view("aboutus");
  }
}