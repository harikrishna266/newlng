<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudents extends Model
{

    public $timestamps = false;

    public function student()
    {
      
      return $this->belongsTo('App\User','user_id');
    }

    public function program()
    {
      return $this->belongsTo('App\Program');
    }
}
