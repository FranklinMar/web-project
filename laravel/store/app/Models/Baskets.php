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

  public function games() {
    return $this->hasMany(Games::class, 'idGame');
  }

  public function customers() {
    return $this->hasMany(Customers::class, 'idCustomer');
  }

}
