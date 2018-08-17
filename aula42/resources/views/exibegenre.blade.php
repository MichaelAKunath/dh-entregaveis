<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>genero escolhido</title>
  </head>
  <body>


        {{$genre->id}}&nbsp
       {{$genre->name}}
       <a href ="/editagenre/{{$genre->id}}">editar</a>
       <a href ="/deletagenre/{{$genre->id}}">deleta</a>
        <br>

        {{$genre->movies->implode('title',', ' )}}

  </body>
</html>
