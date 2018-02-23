<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramStudentsController extends Controller
{
  public function addStudentToProgram($programid) {
    $program = \App\ProgramStudents::all();       
    return view('students.addStudentToProgram')->with('programs', $program);    
  }

  public function activateStudent($id) {
    $program = \App\ProgramStudents::find($id);       
    if($program) {
      $program->active = ($program->active == 1)?0:1;
      $program->save();  
      return redirect()->back()->with('message', 'updated!');
    }
    
  }
}
