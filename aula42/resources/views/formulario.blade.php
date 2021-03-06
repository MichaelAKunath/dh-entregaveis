

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulario de inclusão filmes</title>
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

    <form action='/adicionar' method="post">

        {{ csrf_field()}}  <!--Variavel obrigatória do Laravel gera um token de segurança-->
        <div class="form-group col-6 m-auto">
          <label>Nome</label>
          <input type= 'text' class="form-control" name='title' value="{{old('title')}}">
        </div>
        <div class="form-group col-6 m-auto">
          <label>Avaliacao</label>
          <input type= 'text' class="form-control" name='rating' value="{{old('rating')}}">
        </div>
        <div class="form-group col-6 m-auto">
            <label>Premios</label>
            <input type= 'text' class="form-control" name='awards' value="{{old('awards')}}">
        </div>
        <div class="form-group col-6 m-auto">
            <label for="duracao">Duração</label>
            <input type="text" class="form-control" name="length" value="{{old('length')}}" id="duracao"/>
        </div>
        <div class="form-group col-6 m-auto">
            <label>Data de estreia</label>
            <input type="date" class="form-control" name="release_date" value="{{old('release_date')}}"
        </div>
        <div class="form-group col-6 m-auto">
            <label>Genero</label>
            <select  class="form-control" name="genre_id">
               @foreach ($genres as $genre)
                <option value = {{$genre->id}} >{{$genre->name}} </option>
               @endforeach
            </select>
        </div>
        <br>
        <div class="form-group col-6 m-auto">
            <button type='submit' name='enviar'>enviar</button>
        </div>
    </form>
  </body>
</html>
