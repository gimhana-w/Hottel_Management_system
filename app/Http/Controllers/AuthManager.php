<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function singUp(){
        return view('singUp');
    }

    function dashboard(){
        return view('dashboard');
    }
    function home(){
        return view('home');
    }

    function loginpost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]); 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        
        return redirect(route('login'))->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    function regpost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]); 

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if($user){
            return redirect(route('login'))->with('success', 'User created successfully');
        }
        return redirect(route('register'))->withErrors([
            'email' => 'User creation failed',
        ]); 
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}