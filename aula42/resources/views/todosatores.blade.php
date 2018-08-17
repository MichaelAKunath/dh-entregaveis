<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de atores</title>
  </head>
  <body>

    @foreach($atores as $ator)
        {{$ator->id}}&nbsp
       {{$ator->first_name}}&nbsp
       {{$ator->last_name}}
       <a href ="/editaator/{{$ator->id}}">editar</a>
        <br>
    @endforeach
  </body>
</html>
