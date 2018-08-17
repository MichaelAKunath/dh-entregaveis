<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;  //chama o modelo
use App\genres;

class Formcontroller extends Controller
{
  public function formulario() {
    $genres = genres::all();

    return view('formulario')->with('genres',$genres);

  }


  public function adicionar(Request $request)
  {
    $this->validate($request,[
      'title' => 'required|unique:movies|max:500',
      'rating' => 'numeric|max:10|min:0',
      'awards' => 'integer|max:70',
      'length' => 'integer|max:360',
      'release_date'    => 'date'
    ]);
    //Prepara dados para salvar na tabela do modelo requisitado
    $filme = Filmes::create([
  //  para a tabela           do formulario
      'title' => $request->input('title'),
      'rating' => $request->input('rating'),
      'awards' => $request->input('awards'),
      'lenght' => $request->input('lenght'),
      'release_date' => $request->input('release_date'),
      'genre_id' => $request->input('genre_id')
    ]);

    $sucesso = $filme->save();

      if ($sucesso) {
        return view('formulario')->with('sucesso', true);
        } else {return view('formulario')->with('ocorreu_erro',true);
      }
    }

    public function exibirfilmes()
    {
      $filmes = Filmes::paginate(15);
      return view('todosfilmes')->with('filmes',$filmes);
    }

    public function editafilme($id)
    {
      $filme = Filmes::find($id);

      return view('editafilme')->with('filme',$filme);
    }

    public function gravafilme(Request $request,$id)
    { $request->validate([
      'title' => 'required',
      'release_date'=>'required'
    ]);

      $filme = Filmes::find($id);
      $filme->title = $request->input('title');
      $filme->rating = $request->input('rating');
      $filme->awards = $request->input('awards');
      $filme->length = $request->input('length');
      $filme->release_date = $request->input('release_date');


      $sucesso = $filme->save();

      return view('editafilme')->with('filme',$filme);
    }


    public function deletafilme($id)
    {
      $filme = Filmes::find($id);

      $filme->delete();

      return redirect('/exibefilmes');
    }


  }
