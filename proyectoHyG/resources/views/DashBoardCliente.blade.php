<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard cliente</title>
    <link rel="stylesheet" href="./menúCliente.css">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body> 
    <header id="header">
        <div class="icono-menu">
            <img src="./../Iconos/HamburguerSinFondo.png" id="icono-menu">
        </div>
        <div class="logo-verde">
            <img id="logo" class="icono-menu" src="./../Iconos/image-removebg-preview.png" alt="Logo Empresa">
        </div>
        <nav class="notify">
            <a href="./../index.html">
                <img src="./../Iconos/campana.png" alt="Notify">
            </a> 
        </nav>
        <nav class="cesta-Carrito">
            <a href="./../index.html">
                <img src="./../Iconos/canastaAzul.PNG" alt="Cesta-Carrito">
            </a> 
        </nav>
        <nav class="user">
            <a href="./../index.html">
                <img src="./../Iconos/ClienteAzul.PNG" alt="User-ico">
            </a> 
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>LO ULTIMO</strong> 
                    <ul>
                        <li><a href="./../Errores/Pconstrucción.html">Nuevos productos</a> </li>
                        <li><a href="./../Errores/Pconstrucción.html">Promociones </a> </li>
                    </ul>
                </li>
                <li>
                     <strong>CATALOGO</strong> 
                    <ul>
                        <li><a href="./../Errores/Pconstrucción.html">Despensa  </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Lácteos, Huevos, Refrigerar</a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Bebidas  </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Limpieza </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Cuidado Personal </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Pasabocas y dulces </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Producto para Mascotas</a> </li>
                    </ul>
                </li>
                <li>
                    <strong>HISTORIAL DE PEDIDOS</strong>
                    <ul>
                        <li><a href="./../Errores/Pconstrucción.html">ver pedidos </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <script src="appAdmin.js"></script>
</body>
</html>