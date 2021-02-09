<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register() {
        return view('auth\register');
    }

    public function storeUser(Request $request) {
        $request->validate([
            'nickname' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'nickname' => $request->nickname,
            'name' => $request->name,
            'email' => $request->email,
            'canPublish' => 0,
            'password' => bcrypt($request->password),
        ]);

        return redirect('login');
    }

    
}