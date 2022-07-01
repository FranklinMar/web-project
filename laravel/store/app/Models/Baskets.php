<?php 

// namespace App;
namespace App\Models;

use App\Models\Customers;
use App\Models\Games;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Baskets extends Model {

  use HasFactory;

  protected $table = 'basket';
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 

  public function game() {
    // return $this->hasMany(Games::class, 'idGame');
    return $this->belongsTo(Games::class, 'idGame');
  }

  public function customer() {
    // return $this->hasMany(Customers::class, 'idCustomer');
    return $this->belongsTo(Customers::class, 'idCustomer');
  }

}
