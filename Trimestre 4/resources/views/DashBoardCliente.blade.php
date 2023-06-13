<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard cliente</title>
    <link rel="stylesheet" href="{{ asset('css/menúCliente.css') }}">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body> 
    <header id="header">
        <div class="icono-menu">
            <img src="{{ asset('Iconos/HamburguerSinFondo.png') }}" id="icono-menu">
        </div>
        <div class="logo-verde">
            <img id="logo" class="icono-menu" src="{{ asset('/Iconos/image-removebg-preview.png') }}" alt="Logo Empresa">
        </div>
        <nav class="notify">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/campana.png') }}" alt="Notify">
            </a> 
        </nav>
        <nav class="cesta-Carrito">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/canastaAzul.PNG') }}" alt="Cesta-Carrito">
            </a> 
        </nav>
        <nav class="user">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/ClienteAzul.PNG') }}" alt="User-ico">
            </a> 
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>LO ULTIMO</strong> 
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Nuevos productos</a> </li>
                        <li><a href="{{ url('/Pconstrucción') }}">Promociones </a> </li>
                    </ul>
                </li>
                <li>
                     <strong>CATALOGO</strong> 
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Despensa  </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Lácteos, Huevos, Refrigerar</a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Bebidas  </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Limpieza </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Cuidado Personal </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Pasabocas y dulces </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Producto para Mascotas</a> </li>
                    </ul>
                </li>
                <li>
                    <strong>HISTORIAL DE PEDIDOS</strong>
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">ver pedidos </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <script src="{{ asset('js/appAdmin.js') }}"></script>
</body>
</html>