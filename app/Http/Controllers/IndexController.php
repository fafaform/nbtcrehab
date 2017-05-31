<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Models\User;
use App\Http\Models\Patient;

class IndexController extends Controller
{
  public function index()
  {
    $users_email = array();
    $users = User::all();

    foreach ($users as $user) {
      $users_email[] = $user->email;
    }

    return view('login', ['users_email' => $users_email]);
  }

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
        switch (auth()->user()->level) {
          case 'admin':
            return redirect()->intended('devices');
            break;

          case 'patient':
            return redirect()->intended('devices/' . encrypt(Patient::where('User_ID', '=', auth()->id())->first()['Patient_ID']) );
            break;

          default: // staff
            return redirect()->intended('patients');
            break;
        }
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
