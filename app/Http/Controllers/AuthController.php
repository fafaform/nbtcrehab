<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  /**
   * Handle an authentication attempt.
   *
   * @return Response
   */
  public function login(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        // Authentication passed...
        return redirect()->intended('patients');
    } else {
        return back()->withErrors(['These credentials do not match our records.']);
    }
  }

  public function logout()
  {
    Auth::logout();

    return redirect('/');
  }
}
