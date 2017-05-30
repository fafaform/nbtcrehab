<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Models\User;

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
}
