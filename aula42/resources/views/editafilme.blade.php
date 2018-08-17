

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulario de edição de filmes</title>
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

    <form action='/editafilme/{{$filme->id}}' method="post">

        {{ csrf_field()}}  <!--Variavel obrigatória do Laravel gera um token de segurança-->
        <div class="form-group col-6 m-auto">
          <label>Nome</label>
          <input type= 'text' class="form-control" name='title' value="{{$filme->title}}">


        </div>
        <div class="form-group col-6 m-auto">
          <label>Avaliacao</label>
          <input type= 'text' class="form-control" name='rating' value="{{$filme->rating}}">
        </div>
        <div class="form-group col-6 m-auto">
            <label>Premios</label>
            <input type= 'text' class="form-control" name='awards' value="{{$filme->awards}}">
        </div>
        <div class="form-group col-6 m-auto">
            <label for="duracao">Duração</label>
            <input type="text" class="form-control" name="length" value="{{$filme->length}}" id="duracao"/>
        </div>
        <div class="form-group col-6 m-auto">
            <label>Data de estreia</label>                                     <!--Pega a data no model -->
            <input type="date" class="form-control" name="release_date" value="{{$filme->getreleaseDatetoInput()}}">
            </div>
            <div class="form-group col-6 m-auto">
              <button type='submit' name='enviar'>enviar</button>
            </div>
          <div class="form-group col-6 m-auto">
              <label>Nome genero</label>                                     <!--Pega a data no model -->
              <p class="form-control">{{$filme->genero->name}}</p>
              </div>


    </form>
  </body>
</html>
