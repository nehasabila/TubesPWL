<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('login.register'); 
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'status' => 'required' 
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
       

        User::create($validatedData);
        return redirect('/login')->with('success', 'Account created Successfully!');

        
    }
}
