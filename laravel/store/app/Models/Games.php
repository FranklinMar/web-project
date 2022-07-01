<?php 

// namespace App;
namespace App\Models;

use App\Models\Platforms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Games extends Model {

  use HasFactory;

  protected $table = "game";

  // public function gamePlatform() {
  //   return $this->belongsTo('App\Model\GamePlatforms')
  // }
  public function platforms() {
    // return $this->belongsToMany('App\Platforms');
    return $this->belongsToMany(Platforms::class);
  }

  public function customers() {
    // return $this->belongsToMany('App\Customers');
    return $this->belongsToMany(Customers::class);
  }

}

?>