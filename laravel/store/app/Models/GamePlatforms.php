<?php 

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GamePlatforms extends Model {

  use HasFactory;

  protected $table = "gameplatforms";
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 

  // public function platform() {
  //   // return $this->hasMany('App\Models\Platforms');
  //   return $this->hasMany(Platforms::class, 'idPlatform')
  // }

  // public function game() {
  //   // return $this->hasMany('App\Models\Game')
  //   return $this->hasMany('')
  // }
}
