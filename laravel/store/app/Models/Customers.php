<?php 

namespace App\Models;

use App\Models\Games;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model {

  use HasFactory;

  protected $table = 'customer';
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 

  public function games() {
    return $this->belongsToMany(Games::class, 'basket', 'idCustomer', 'idGame', 'id', 'id');
  }

  public function basket() {
    return $this->hasMany(Baskets::class, 'idCustomer');
  }

  public static function findByLogin(string $login) {
    foreach (Customers::all() as $customer) {
      if (strcasecmp(trim($customer['login']), trim($login)) == 0) {
        return $customer;
      }
    }
    return null;
  }

  public static function authorize(string $login, string $password): bool {
    $customer = Customers::findByLogin($login);

    if (!$customer) {
      return false;
    }
    return $customer['password'] == $password;
  }
}

?>