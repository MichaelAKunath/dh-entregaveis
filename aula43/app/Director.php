<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
  protected $table = 'directors';
  protected $fillable = ['first_name',
  'last_name','birthday'];//
}
