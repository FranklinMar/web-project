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
  public function platforms() {
    return $this->belongsToMany(Platforms::class, 'gameplatforms', 'idGame', 'idPlatform', 'id', 'id');
  }

  public function customers() {
    return $this->belongsToMany(Customers::class, 'basket', 'idGame', 'idCustomer', 'id', 'id');
  }

  public function categories() {
    return $this->belongsToMany(Category::class, 'category', 'idGame', 'idCategory', 'id', 'id');
  }

  public function baskets() {
    return $this->hasMany(Baskets::class, 'idGame');
  }

}
