<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class SessionController extends Controller
{
  
  public function listAllSessions() {
    $sessions = \App\Session::all();
    return view('sessions.listAllSessions')->with('sessions',  $sessions);
  }

  public function showSessionForm($programid = null) {
    $programs = \App\Program::all();
    return view('sessions.createsession')->with('programs',  $programs);
  }

  public function createSessions(Request $request) {

    $validator = Validator::make($request->except('_token'), [
          'title' => 'required',
          'program_id' => 'required',
          'description' => 'required',
          'venue' => 'required',
          'date' => 'required',
      ]);


      if ($validator->fails()) {
            return redirect('/sessions/add')
                    ->withErrors($validator)
                    ->withInput();
      }
      \App\Session::create($request->except('_token'));
      return redirect('/sessions')->with('message', 'sessions added!');

  }
}
