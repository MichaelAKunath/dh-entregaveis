<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{           //variavel obrigatoria definindo a tabela
    protected $table = 'genres';

    public function filmes() {
      return $this->hasmany(Filmes::class,'genre_id','id');
    }
    //
}
