<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{           //variavel obrigatoria definindo a tabela
    protected $table = 'movies';
            //variavel obrigatoria definido os campos
    protected $fillable = ['title','rating','awards','lenght','release_date'];  //obrigatorio do Laraveel
    //tratamento de data para formato brasileiro
    public function getreleaseDate() {
      $release_date = new \Datetime($this->release_date);
      return $release_date->format('d/m/Y');
    }
      public function getreleaseDatetoInput() {
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('Y-m-d');
    }
    public function genero() {
      return $this->hasone(Generos::class, 'id' , 'genre_id');
    }
}
