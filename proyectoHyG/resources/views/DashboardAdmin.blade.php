<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="./menuAdmin.css">
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
                <img src="./../Iconos/notifyAzul.jpg" alt="Notify">
            </a> 
        </nav>
        <nav class="user">
            <a href="./../index.html">
                <img src="./../Iconos/iconoAdmin.jpg" alt="User-ico">
            </a> 
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>GESTIONAR VENTAS</strong> 
                    <ul>
                        <li><a href="./../FormulariosAdmin/RegVenta.html"> Registrar Ventas</a> </li>
                        <li><a href="./../Errores/Pconstrucción.html">Informe de Ventas</a></li>
                    </ul>
                </li>
                <li>
                     <strong>GESTIONAR COMPRAS</strong> 
                    <ul>
                        <li><a href="./../Errores/Pconstrucción.html">Ver Proveedores </a> </li>
                        <li> <a href="./../FormulariosAdmin/RegVenta.html">Registrar Compra </a></li>
                        <li><a href="./../Errores/Pconstrucción.html">Detalles de la Compra </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR INVENTARIO</strong>
                    <ul>
                        <li> <a href="./../FormulariosAdmin/Inventario.html">Ver Inventario </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR PEDIDOS</strong>
                    <ul>
                        <li><a href="./../FormulariosAdmin/Pedidos.html">Ver Pedidos</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <script src="appAdmin.js"></script>
</body>
</html>