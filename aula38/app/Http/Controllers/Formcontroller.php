<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
  public function formulario() {
    return view('formulario');
  }


  public function adicionar(Request $request)
  {
    $this->validate($request,[
      'title' => 'required|unique:movies|max:500',
      'rating' => 'integer|max:10|min:0',
      'awards' => 'integer|max:70'
    ]);

    return view('formulario')->with([$request[1],$request[2],$request[3]]);
  }
    //
}
