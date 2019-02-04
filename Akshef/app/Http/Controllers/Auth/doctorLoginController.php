<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class doctorLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:doctor' ,['except'=>['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth.doctor-login');
    }

    public function login(Request $request)
    {
      
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
      ]);

      if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        
        return redirect()->intended(route('doctor.dashboard'));
      }

     
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function logout()
    {
      Auth::guard('doctor')->logout();

        return redirect('/landingpage');
    }
}
