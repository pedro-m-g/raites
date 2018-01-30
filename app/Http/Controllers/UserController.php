<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function __construct()
    {
      $this->middleware('auth');
    }

    public function showSettings()
    {
      $user = auth()->user();
      return view('settings', [
        'user' => $user
      ]);
    }

    public function saveSettings(Request $request)
    {
      $user = auth()->user();
      $user->role = $request->role;
      $user->save();
      return redirect()->back();
    }

}
