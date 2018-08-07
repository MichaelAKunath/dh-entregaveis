<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $filmes = 'actors';
            //variavel obrigatoria
    protected $fillable = ['first_name','last_name','rating'];  //obrigatorio do Laraveel
}
