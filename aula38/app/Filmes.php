<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{           //variavel obrigatoria definindo a tabela
    protected $table = 'movies';
            //variavel obrigatoria definido os campos
    protected $fillable = ['title','rating','awards','lenght','release_date'];  //obrigatorio do Laraveel
}
