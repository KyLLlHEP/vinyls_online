<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    // Display acaunt page
    public function index()
    {
        return view('account');
    }

    // Method for updating your avatar
    public function updateAvatar(Request $request)
    {
        // Validation of the received file
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user(); // Get the current user
        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path;
        $user->save();
         // Upload the file to the 'avatars' folder in the 'storage/app/public/images' directory

        // Save the new avatar path in the DB
        $user->avatar = $path;
        $user->save();

        // Success message
        return back()->with('success', 'Avatar updated successfully.');
    }
}
