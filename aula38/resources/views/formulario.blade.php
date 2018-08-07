

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulario de inclusão filmes</title>
  </head>
  <body>
    @if (count($errors) > 0)
       <div class="alert alert-danger"> <!--vem do bootstrap-->
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
       </div>
    @endif

    <form action='/adicionar' method="post">

        {{ csrf_field()}}  <!--Variavel obrigatória do Laravel-->
        Nome &nbsp&nbsp&nbsp: <input type= 'text' name='title'>
        <br>
        Avaliacao : <input type= 'text' name='rating'>
        <br>
        Premios &nbsp&nbsp : <input type= 'text' name='awards'>

        <button type='submit' name='enviar'>enviar</button>
    </form>
  </body>
</html>
