<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VinylCatalog extends Model
{
    use HasFactory;
    protected $fillable = ['artist_name', 'album_title', 'genre', 'image_path', 'price'];
}
