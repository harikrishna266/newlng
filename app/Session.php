<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  public function programs()
  {
    return $this->belongsTo('App\Programs');
  }
}
