<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\atores;

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

  public function exibeatores()
  {
    $atores = Atores::all();
    return view('todosatores')->with('atores',$atores);
  }

  public function editaator($id)
  {
    $ator = Atores::find($id);
    return view('editator')->with('ator',$ator);
  }
  public function gravaator(Request $request,$id)
  { $request->validate([
    'first_name' => 'required',
    'last_name'=>'required'
  ]);

    $ator = Atores::find($id);
    $ator->first_name = $request->input('first_name');
    $ator->last_name = $request->input('last_name');
    $ator->rating = $request->input('rating');
    $ator->favorite_movie_id = $request->input('favorite_movie_id');

    $sucesso = $ator->save();

    return view('editator')->with('ator',$ator);
  }


    //
}
