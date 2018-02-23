<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class RegisterController extends Controller
{
  public function ShowRegisterationForm() {
    return view('register.form');
  }

  public function CreateRegistration(Request $request) {

    $validator = Validator::make($request->all(), [
        'email' => 'unique:users,email',
        'password' => 'required|confirmed',
    ]);

    if ($validator->fails()) {
          return redirect('/register')
                  ->withErrors($validator)
                  ->withInput();
    }
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
    return redirect('/login')->with('message', 'Registration complete!');

 }

}
