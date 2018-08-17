<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genres extends Model
{           //variavel obrigatoria definindo a tabela
    protected $table = 'genres';
    protected $fillable = ['id','name'];

public function movies(){
    return $this->hasmany(Filmes::class, 'genre_id','id');
}

}
