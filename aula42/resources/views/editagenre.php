

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulario de edição de generos</title>
  </head>
  <body>
    @if (count($errors) > 0) <!--Controle de mensagens de erro -->
       <div class="alert alert-danger"> <!--vem do bootstrap-->
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
       </div>
    @endif
    @if (isset($sucesso)) && ($sucesso))
       <p>Cadastro efetuado com sucesso !!</p>
    @endif
    @if (isset($ocorreu_erro)) && ($ocorreu_erro))
       <p>Erro no cadastro !!</p>
    @endif

    <form action='/editagenre/{{$genre->id}}' method="post">

        {{ csrf_field()}}  <!--Variavel obrigatória do Laravel gera um token de segurança-->
        <div class="form-group col-6 m-auto">
          <label>nome do genero</label>
          <input type= 'text' class="form-control" name='name' value="{{$genre->name}}">


        </div>
        
            <div class="form-group col-6 m-auto">
              <button type='submit' name='enviar'>enviar</button>
            </div>


    </form>
  </body>
</html>
