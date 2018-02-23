<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class StudentController extends Controller
{
  public function listAllStudents() {
    $students = \App\User::all(); 
    return view('students.listAllStudents')->with('students', $students);;
  }

  public function addStudentToProgram($programid) {
    $students = \App\User::where('is_admin', 0)->get();
    $program = \App\Program::find($programid);
    return view('students.addStudentToProgram')->with('students', $students)
                                              ->with('program', $program);    
  }

}
