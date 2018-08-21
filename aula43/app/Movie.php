<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title',
    'awards','release_date','length',
    'genre_id','revenue','director_id'];
}
