<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicDB extends Model
{
    // use HasFactory;
    protected $fillable = [
        'title',
        'album_id',
        'yearOfRelease',
        'artist'
    ];
}
