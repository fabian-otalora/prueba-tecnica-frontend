<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bebidas y Cócteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style type="text/css">
        body{
        /* background: #00b894; */
        }
  </style>
</head>
<body class="text-bg-dark">

<div class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
                <h2>Bebidas y Cócteles</h2>
                <i class="bi bi-person-badge h3"></i>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Crea tu cuenta</h2>
            <form method="POST" action="{{ route('register.post') }}">
              @csrf

              @session('error')
                  <div class="alert alert-danger" role="alert"> 
                      {{ $value }}
                  </div>
              @endsession

              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name@example.com" required>
                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                  </div>
                  @error('name')
                        <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                  </div>
                  @error('email')
                        <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                  </div>
                  @error('password')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="password_confirmation" required>
                    <label for="password_confirmation" class="form-label">{{ __('Confirmar contraseña') }}</label>
                  </div>
                  @error('password_confirmation')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">{{ __('Registrarse') }}</button>
                  </div>
                </div>
                <div class="col-12">
                  <p class="m-0 text-secondary text-center">¿Tiene una cuenta? <a href="{{ route('login') }}" class="link-primary text-decoration-none">Inicia sesión</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
