<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Procura de filmes</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b00;//#636b6f
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 40px;
                top: 100px;
            }

            .content {
                text-align: center;
            }

            .title {color: #636b00;
                font-size: 30px;
            }

            .links {
                color: #636b00;
                padding: 0 25px;
                font-size: 20px;

                letter-spacing: .7rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .linha {
                color: #636b00;
                padding: 0 25px;
                font-size: 20px;
                letter-spacing: .1rem;
                text-decoration: none;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        </head>
        <body>
        <h3 class = "flex-center" style="color:#ff4700;" > Lista de atores </h3>
        <form action = "/atores/procurar">
          <label>Nome :</label><input type="text" name="atorproc">
        </form>
        <div class = "top-left linha" >
          <div>
            <table>
               <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>Avaliação</th>
                  <th>Id fp</th>
                </tr>
                @foreach ($atores as $ator)
                  <tr>
                    <?php $id = $ator->id ?>
                    <td>{{$ator->id}}</td>
                    <td><a class="links" href="ator <?php echo($id)?>"> {{$ator->first_name}}</a></td>
                    <td>{{$ator->last_name}}</td>
                    <td>{{$ator->rating}}</td>
                    <td>{{$ator->favorite_movie_id}}</td>
                  </tr>
                @endforeach
            </table>

          </div>
        </div>
      </body>
  </html>
