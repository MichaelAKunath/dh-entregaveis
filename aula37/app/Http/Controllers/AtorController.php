<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

Use App\Actor;

class AtorController extends Controller
{
  public function directory()
  {
    $atores = actor::orderBy('first_name')->get();

    return view('atores')->with('atores',$atores);
  }
  public function show($id){
      $ator = actor::find($id);
      return view('ator')->with('ator',$ator);
   }
   public function procura($nome){
       $ator = actor::find($nome);
       return view('ator')->with('ator',$ator);
    }


}
