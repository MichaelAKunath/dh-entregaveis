<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de filmes</title>
  </head>
  <body>

    @foreach($filmes as $filme)
       {{$filme->title}} <a href ="">editar</a>
        <br>
    @endforeach
  </body>
</html>
