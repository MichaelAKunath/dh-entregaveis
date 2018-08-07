<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $filmes = 'movies';
            //variavel obrigatoria
    protected $fillable = ['title','rating','awards'];  //obrigatorio do Laraveel
}
