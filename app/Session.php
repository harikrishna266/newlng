<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  
  protected $fillable = [
    'title', 'venue', 'description','date', 'program_id'
  ];

  public function programs()
  {
    return $this->belongsTo('App\Program','program_id');
  }

}
