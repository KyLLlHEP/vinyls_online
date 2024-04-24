<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vinyl;
use Illuminate\Support\Facades\Auth;

class VinylController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login')->withErrors('You must be logged in to add a vinyl.');
        }

        $request->validate([
            'artist_name' => 'required|string|max:255',
            'album_title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'image_path' => 'required|image|max:2048',
            'price' => 'required|numeric',
        ]);

        $user = Auth::user(); // Получаем аутентифицированного пользователя

        // Обработка загрузки изображения
        $path = $request->file('image_path')->store('public/vinyls');

        // Создание новой записи о виниле
        $vinyl = new Vinyl([
            'user_id' => $user->id,
            'nickname' => $user->nickname,
            'artist_name' => $request->artist_name,
            'album_title' => $request->album_title,
            'genre' => $request->genre,
            'image_path' => $path,
            'price' => $request->price,
        ]);

        $vinyl->save();

        return redirect()->back()->with('success', 'Vinyl successfully added.');
    }
}
