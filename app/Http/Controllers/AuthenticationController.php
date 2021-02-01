<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function registration()
    {
        return view("pages.registration");
    }

    public function doRegistration(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        // If none failed continue and exclude password_confirmation

        $user = User::create($validated);
        dd($user);
    }


    public function login()
    {
      return view('pages.login');
    }

    public function doLogin(Request $request)
    {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
          $request->session()->regenerate();

          return redirect()->intended('contacts');
      }

      return back()->withErrors([
          'email' => 'The provided credentials do not match our records.',
      ]);
    }
}
