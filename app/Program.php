<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  use Notifiable;
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'title', 'venue', 'description','date','test_activated'
  ];

  public function programs_studenet()
  {
    return $this->hasMany('App\ProgramStudents');
  }
  public function sessions()
  {
    return $this->hasMany('App\Session');
  }
}
