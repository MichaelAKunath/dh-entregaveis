<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtorController extends Controller
{
  public function fatores() {
    return view('fatores');
  }


  public function adicionar(Request $request)
  {
    $this->validate($request,[
      'first_name' => 'required|unique:actors|max:500',
      'last_name' => 'required|unique:actors|max:500',
      'rating' => 'integer|max:10|min:0'

    ]);

    return view('fatores');
  }
    //
}
