<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
            
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if (Auth::check() && Auth::user()->status == 'pembaca') {
                return redirect()->intended('/');
            }
            elseif (Auth::check() && Auth::user()->role == 'admin' || 'penulis'){
                return redirect()->intended('/user/dashboard');
            } else {
                return redirect('/logouts');
            }
           
        }
        
        return back()->with('loginError', 'Login failed!');


    }
}
