<?php 

// namespace App;
namespace App\Models;

use App\Models\Platforms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Games extends Model {

  use HasFactory;

  protected $table = "game";
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 

  // public function gamePlatform() {
  //   return $this->belongsTo('App\Model\GamePlatforms')
  // }
  public function platforms() {
    // return $this->belongsToMany('App\Models\Platforms');
    return $this->belongsToMany(Platforms::class, 'gameplatforms', 'idGame', 'idPlatform', 'id', 'id');
  }

  public function customers() {
    // return $this->belongsToMany('App\Models\Customers');
    return $this->belongsToMany(Customers::class, 'basket', 'idCustomer', 'idGame', 'id', 'id');
    // $this->belongsTo()
  }

  public function baskets() {
    // return $this->belongsTo(Baskets::class, 'idGame');
    return $this->hasMany(Baskets::class, 'idGame');
  }

}
