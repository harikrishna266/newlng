<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class LoginController extends Controller
{

  public function ShowLoginPage() {
    return view('login.form');
  }

  public function createlogin(Request $request) {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_admin' => 1])) {
          return redirect()->intended('/students');
      }else {
          Session::flash('message', "Please contact the admin!");
          return redirect() ->back();
      }
  }

  public function Logout() {
    Auth::Logout();
    return redirect()->intended('/login');

  }

}
