<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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
                    <li><a href="{{ url('/Pconstrucción') }}">Informe de Ventas </a></li>
                </ul>
            </li>
            <li>
                 <strong>GESTIONAR COMPRAS</strong> 
                <ul>
                    <li><a href="{{ url('/Pconstrucción') }}">Ver Proveedores  </a></li>
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
                    <li><a href="{{ url('/Pedidos') }}">Ver Pedidos</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
    <main id="main">
        <h1 id="h1">Pedidos</h1>
        <form class="container">
            <!-- Primera linea -->
            <div class="contenedorP-1 row">
                
                    <div class="col-7">
                        
                    </div>
                    <div class="col-4">
                        <div id="Buscar" class="d-flex" role="search">
                            <input id="espaciobuscar" class="col-6 form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button id="botonBuscar" class="col-6 btn btn-outline-dark" type="submit">Search</button>
                        </div>
                    </div>
                    
                    <div class="col-1">
                        <img id="Filtro" src="{{ asset('Iconos/Filtro.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        
            <!-- tabla -->
            <div class="">
                <table class="table table-bordered border-primary">
                    <thead>
                      <tr>
                        <th scope="col">COD</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">HORA</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">ACCIÓN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">VER</button></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
    <!-- Scripts -->
    <script src="{{ asset('js/validacionFormularios.js') }}"></script>
    <script src="{{ asset('js/appCompras.js') }}"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>