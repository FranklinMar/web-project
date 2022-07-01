<?php 

// namespace App;
namespace App\Models;

use App\Models\Games;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Platforms extends Model {

  use HasFactory;

  protected $table = "platforms";
  
  public function games() {
    // return $this->belongsToMany('App\Models\Games');
    return $this->belongsToMany(Games::class, 'gameplatforms', 'idPlatform', 'idGame', 'id', 'id');
  }
}

?>