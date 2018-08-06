<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actors';

    public function getNomecompleto() {
      return $this->first_name . " " . $this->last_name;
    }
  }
