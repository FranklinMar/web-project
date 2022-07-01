<?php 

namespace App\Models;

use App\Models\Games;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Platforms extends Model {

  use HasFactory;

  protected $table = "platforms";
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 
  
  public function games() {
    return $this->belongsToMany(Games::class, 'gameplatforms', 'idPlatform', 'idGame', 'id', 'id');
  }
}
