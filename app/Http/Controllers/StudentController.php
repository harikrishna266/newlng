<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class StudentController extends Controller
{
  public function listAllStudents() {
    $students = \App\User::all(); 
    return view('students.listAllStudents')->with('students', $students);;
  }

  

}
