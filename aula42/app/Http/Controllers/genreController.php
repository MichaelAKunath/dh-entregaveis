<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\genres;

class genreController extends Controller
{
  public function exibegenres() {
      $genres = genres::all();
    return view('exibegenres')->with('genre',$genres);
 }
 public function mostragenre($Id) {
     $genres = genres::find($Id);

    return view('exibegenre')->with('genre',$genres);
}
public function editagenre($Id) {
    $genres = genres::find($Id);

  return view('editagenre')->with('genre',$genres);
}



}
