<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate DATA
        $validatedData = $request->validate([
            'nickname' => 'required|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create new user
        $user = User::create([
            'nickname' => $validatedData['nickname'],
            'first_name' => $validatedData['first_name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'rol' => 'user',  // Default rol
        ]);

        // Autentification
        Auth::login($user);

        // Back to home page
        return redirect()->route('index');
    }
}
