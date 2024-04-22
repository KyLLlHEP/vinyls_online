<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class VinylCatalogController extends Controller
{
    public function index(Request $request)
    {
        $query = Vinyl::query();

        // Фильтр по имени артиста или названию альбома
        if ($request->has('search') && $request->search != '') {
            $query->where('artist_name', 'like', '%' . $request->search . '%')
                  ->orWhere('album_title', 'like', '%' . $request->search . '%');
        }

        // Сортировка по цене
        if ($request->has('sort') && in_array($request->sort, ['low-high', 'high-low'])) {
            $direction = $request->sort == 'low-high' ? 'asc' : 'desc';
            $query->orderBy('price', $direction);
        }

        $vinyls = $query->get();

        return view('vinylCatalog', compact('vinyls'));
    }

}
