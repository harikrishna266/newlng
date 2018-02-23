<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Program;

class ProgramController extends Controller
{
    //
  public function listAllPrograms() {
    $programs = \App\Program::all(); 
    return view('programs.listAllPrograms')->with('programs', $programs);;
  }

  public function ShowProgramFrom() {
    return view('programs.createProgram');
  }
  public function ShowEditPage($id) {
    $program = \App\Program::find($id); 
    return view('programs.editprogram')->with('program', $program);
  }

  public function UpdateProgram( $id,Request $request) {    
    \App\Program::where('id',$id)
                  ->update($request->except('_token'));
    return redirect('/programs')->with('message', 'Program updated!');
  }

  public function deleteProgram( $id  ) {    
    \App\Program::where('id',$id)->delete();
    return redirect('/programs')->with('message', 'Program deleted!');
  }

  public function createProgram(Request $request) {

    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'description' => 'required',
        'venue' => 'required',
        'date' => 'required',
    ]);

    if ($validator->fails()) {
          return redirect('/programs/add')
                  ->withErrors($validator)
                  ->withInput();
    }
    Program::create([
        'title' => $request->title,
        'description' => $request->description,
        'venue' => $request->venue,
        'date' => $request->date,
    ]);
    return redirect('/programs')->with('message', 'Program added!');

 }
}
