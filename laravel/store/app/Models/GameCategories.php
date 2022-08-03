<?php 

namespace App\Models;

use App\Models\Category;
use App\Models\Games;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model {

  use HasFactory;

  protected $table = 'gamecategories';
  protected $guarded = [];
  public $timetstamps = false;
  const UPDATED_AT = null; 
  const CREATED_AT = null; 
}
