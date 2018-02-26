<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    
    protected $fillable = [
    'test_id', 'question', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5','correct_answer'
  ];
}
