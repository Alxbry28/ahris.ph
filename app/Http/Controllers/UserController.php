<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }  
     public function login() {
    	return view('auth.login');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');  
    }
    public function register() {
    	return view('auth.register');
    }
    public function userProfile() {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

}
