<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;
use Spatie\Permission\Models\Role;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function singUp(){
        $roles = Role::all();
        return view('singUp', compact('roles'));
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
            $request->session()->regenerate();
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
            'password' => 'required',
            'role' => 'required|exists:roles,name'
        ]); 

        try {
            // Create the user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            
            // Get the role
            $role = Role::where('name', $request->role)->first();
            
            if (!$role) {
                throw new \Exception('Selected role does not exist');
            }

            // Assign role to user
            $user->assignRole($role);

            return redirect(route('login'))->with('success', 'Registration successful! Please login.');
            
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Registration failed. ' . $e->getMessage()]);
        }
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}