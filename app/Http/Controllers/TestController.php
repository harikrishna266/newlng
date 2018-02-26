<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class TestController extends Controller
{
  public function listAllTests() {
    $tests = \App\Test::all();
    return view('tests.listAllTests')->with('tests',$tests);
  }

  public function add() {
    $program = \App\Program::all();
    return view('tests.add')->with('programs',$program); 
  }

  public function save(Request $request) {

    $validator = Validator::make($request->except('_token'), [
          'title' => 'required',
          'program_id' => 'required',
          'duration' => 'required',
       ]);


      if ($validator->fails()) {
            return redirect('/test/add')
                    ->withErrors($validator)
                    ->withInput();
      }
      \App\Test::create($request->except('_token'));
      return redirect('/test')->with('message', 'test added!');
    
  }
}
