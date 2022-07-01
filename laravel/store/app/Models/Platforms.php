<?php 

namespace App;

use App\Models\Games;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Platforms extends Model {

  use HasFactory;

  protected $table = "platforms";
  
  public function games() {
    return $this->belongsToMany('App\Games');
  }
}

?>