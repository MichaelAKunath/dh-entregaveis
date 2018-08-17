<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/app.css"> 
    <meta charset="utf-8">
    <title>Lista de filmes</title>
  </head>
  <body>

    @foreach($filmes as $filme)
        {{$filme->id}}&nbsp
       {{$filme->title}}
       <a href ="/editafilme/{{$filme->id}}">editar</a>
       <a href ="/deletafilme/{{$filme->id}}">deleta</a>
        <br>
    @endforeach
    {{ $filmes->links() }}
  </body>
</html>
