<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    protected $table = 'actors';
            //variavel obrigatoria
    protected $fillable = ['first_name','last_name','rating'];  //obrigatorio do Laraveel
}
