<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bebidas y Cócteles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
<body class="text-bg-dark">
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <h2>Bebidas y Cócteles</h2>      
            </div>
            <div class="col-md-1">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
      
    </header>

    <div class="jumbotron">
        @session('success')
            <div class="alert alert-success" role="alert"> 
              {{ $value }}
            </div>
        @endsession

        <h1 class="display-4">Hola, {{ auth()->user()->name }}</h1>
        <p class="lead">Bienvenido! En este espacio puedes consultar y registrar tus cocteles favoritos. <i class="bi bi-emoji-sunglasses"></i></p>
        <hr class="my-4">
        <p class="lead">
          <a class="btn btn-primary btn" href="{{ url('/list-api') }}" role="button">Lista de cócteles con Alcohol - (API)</a>
          <a class="btn btn-primary btn" href="#" role="button">Lista de cócteles en base de datos</a>
        </p>

      </div>



  </div>
</main>

</body>
</html>
