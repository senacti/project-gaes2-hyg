{{--
<!doctype html>
<html lang="en">

<head>
  <title>	</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <h1>	hola</h1>
  @yield('content')
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="{{ asset('css/RegCompra.css') }}">
    <link rel="stylesheet" href="{{ asset('css/RegVentaEinventario.css') }}">
    <!-- Boostrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header id="header">
        <div class="icono-menu">
            <img src="{{ asset('Iconos/HamburguerSinFondo.png') }}" id="icono-menu">
        </div>
        <div class="logo-verde">
            <img id="logo" class="icono-menu" src="{{ asset('Iconos/image-removebg-preview.png') }}" alt="Logo Empresa">
        </div>
        <nav class="notify">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/notifyAzul.jpg') }}" alt="Notify">
            </a>
        </nav>
        <nav class="user">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/iconoAdmin.jpg') }}" alt="User-ico">
            </a>
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>GESTIONAR VENTAS</strong>
                    <ul>
                        <li><a href="{{ url('/RegVenta') }}"> Registrar Ventas</a> </li>
                        <li><a href="{{ url('/Pconstrucción') }}">Informe de Ventas</a>  </li>
                    </ul>
                </li>
                <li>
                     <strong>GESTIONAR COMPRAS</strong>
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Ver Proveedores </a> </li>
                        <li><a href="{{ url('/RegistCompra') }}">Registrar Compra </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Detalles de la Compra </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR INVENTARIO</strong>
                    <ul>
                        <li> <a href="{{ url('/Inventario') }}">Ver Inventario </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR PEDIDOS</strong>
                    <ul>
                        <li><a href="{{ url('/Pedidos') }}">Ver Pedidos </a></li>
                    </ul>
                </li>
            </ul>
            <br><br>
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>
    </header>
        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/validacionFormularios.js') }}"></script>
    <script src="{{ asset('js/appCompras.js') }}"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


