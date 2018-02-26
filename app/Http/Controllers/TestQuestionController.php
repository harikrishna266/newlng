<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class TestQuestionController extends Controller
{
  public function addForm() {
    $tests = \App\Test::all();
    return view('questions.create')->with('tests', $tests);;
  }
  public function index() {
    $questions = \App\TestQuestion::all();
    return view('questions.list')->with('questions', $questions);;
  }
  
  public function create(Request $request) {
    print_r($request->except('_token'));

    $validator = Validator::make($request->except('_token'), [
        'question' => 'required',
        'answer_1' => 'required',
        'answer_2' => 'required',
        'answer_3' => 'required',
        'answer_4' => 'required',
        'correct_answer' => 'required',
    ]);

    if ($validator->fails()) {
          return redirect('/questions/add')
                  ->withErrors($validator)
                  ->withInput();
    }
    \App\TestQuestion::create($request->except('_token'));
    return redirect('/questions')->with('message', 'Program added!');
  }
}
