<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumDB extends Model
{
    // use HasFactory;
    protected $fillable = [
        'album_title',
        'year_of_release',
        'artist'
    ];
}
