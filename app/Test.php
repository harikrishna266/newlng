<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  protected $fillable = [
    'program_id', 'title', 'duration'
  ];

  public function programs() {
    return $this->belongsTo('\App\Program','program_id');
  }
}
