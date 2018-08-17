<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Lista de generos</title>
  </head>
  <body>

    @foreach($genre as $genre)
        {{$genre->id}}&nbsp
       {{$genre->name}}
       <a href ="/editagenre/{{$genre->id}}">editar</a>
       <a href ="/deletagenre/{{$genre->id}}">deleta</a>
        <br>
    @endforeach
  </body>
</html>
