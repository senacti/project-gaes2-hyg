<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/menuAdmin.css') }}">
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
                <img src="{{ asset('Iconos/iconoEmp.png') }}" alt="User-ico">
            </a> 
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>GESTIONAR VENTAS</strong> 
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Registrar Ventas</a> </li>
                      
                    </ul>
                </li>
                <li>
                     <strong>GESTIONAR COMPRAS</strong> 
                    <ul>
                        
                        <li><a href="{{ url('/Pconstrucción') }}">Ordenes de Compra</a></li>
                        
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR INVENTARIO</strong>
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Ver Inventario </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR PEDIDOS</strong>
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Ver Pedidos</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <script src="{{ asset('js/appAdmin.js') }}"></script>
</body>
</html>