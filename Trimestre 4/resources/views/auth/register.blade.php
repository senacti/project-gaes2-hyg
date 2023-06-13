<!doctype html>
<html lang="en">

<head>
  <title>Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/styleRegistro.css') }}" rel="stylesheet">
</head>

<body class="body">
<header id="header">
        <div class="logo">
            <img src="{{ asset('Iconos/image-removebg-preview.png')}}" class="img-fluid" alt="Logo empresa">
           
        </div>
        <nav>
            <h1>Formulario de registro de Cliente</h1>
        </nav>
</header>
<main>
<form method="post" action="{{ route('register') }}" class="container needs-validation" novalidate >
    @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline"> 
            <label class="form-label" for="form3Example1">Nombres</label>
              <input type="text" name="name" id="form3Example1" class="form-control" placeholder="Ingrese su nombre" />
             
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline"> 
                <label class="form-label" for="form3Example2">Apellidos</label>
              <input type="text" name="last name" id="form3Example2" class="form-control" placeholder="Ingrese sus apellidos" />
             
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
              <label class="form-label" for="form3Example1">Correo</label>
                <input type="email" name="email" id="form3Example1" class="form-control" placeholder="Ingrese su correo" />
               
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
                  <label class="form-label" for="form3Example2">Direccion</label>
                <input type="text" name="address" id="form3Example2" class="form-control" placeholder="Ingrese su direccion" />
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
              <label class="form-label" for="form3Example1">Celular</label>
                <input type="number" name="celular" id="form3Example1" class="form-control" placeholder="Ingrese su numero de celular" />
               
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
                  <label class="form-label" for="form3Example2">Telefono</label>
                <input type="number" name="telefono" id="form3Example2" class="form-control" placeholder="Ingrese su numero de telefono" />
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
              <label class="form-label" for="form3Example1">contraseña</label>
                <input type="password" name="password" id="form3Example1" class="form-control" placeholder="Ingrese su nombre" />
               
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="form-outline"> 
                  <label class="form-label" for="form3Example2">confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="form3Example2" class="form-control" placeholder="Ingrese sus apellidos" />
               
              </div>
            </div>
          </div>

          <div class="text-center pt-1 mb-5 pb-1">

            <button class="btn btn-primary btn-lg" type="submit">REGISTRAR</button>
          
        </div>
      </form>
    <script src="validacionRegistros.js"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="{{ asset('js/validacionRegistros.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>