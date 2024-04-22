<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyl extends Model
{
    protected $fillable = [
        'user_id', 'nickname', 'artist_name', 'album_title', 'genre', 'image_path', 'price'
    ];


}
