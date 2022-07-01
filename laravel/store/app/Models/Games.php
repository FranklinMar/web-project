<?php 

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Games extends Model {

  use HasFactory;

  protected $table = "game";

  // public function gamePlatform() {
  //   return $this->belongsTo('App\Model\GamePlatforms')
  // }
  public function platforms() {
    return $this->belongsToMany('App\Platforms');
  }

  public function customers() {
    return $this->belongsToMany('App\Customers');
  }

}

?>