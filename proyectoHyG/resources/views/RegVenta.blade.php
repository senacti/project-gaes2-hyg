<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Venta</title>
    <link rel="stylesheet" href="RegCompra.css">
    <link rel="stylesheet" href="RegVentaEinventario.css">
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
                        <li><a href="./../Errores/Pconstrucción.html">Informe de Ventas </a> </li>
                    </ul>
                </li>
                <li>
                     <strong>GESTIONAR COMPRAS</strong> 
                    <ul>
                        <li><a href="./../Errores/Pconstrucción.html">Ver Proveedores </a> </li>
                        <li> <a href="./../FormulariosAdmin/RegistCompra.html">Registrar Compra </a></li>
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
                        <li><a href="./../FormulariosAdmin/Pedidos.html">Ver Pedidos </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <h1 id="h1">Registar nueva venta</h1>
        <form class="container needs-validation " novalidate>
            <!-- Primera linea -->
            <div class="contenedor-1">
                <div class="row" action="">
                    <div class="col-4">
                        <label for="nombres" class="email-imput">Fecha</label>
                    </div>
                    <div class="col-4">
                        <label for="apellidos">Numero</label>
                    </div>
                    <div class="col-4">
                        <label for="apellidos">Cliente</label>
                    </div>
                </div>
                <div class="row" action="">
                    <div class="col-4">
                        <input class="controls form-control" type="date" name="nombres" id="line1" placeholder="DD/MM/AA" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-4">
                        <input class="controls form-control" type="text" name="apellidos" id="line1" placeholder="Numero de venta" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-4">
                        <input class="controls form-control" type="text" name="apellidos" id="line1" placeholder="Escriba el nombre del cliente" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                </div>
            </div>
            <!-- segunda linea -->
            <div class="contenedor-1">
                <div class="form-2 row" action="">
                    <div class="col-4">
                        <input class="controls form-control" type="search" name="nombres" id="largo" placeholder="SELECCIONA EL PRODUCTO O ESCRIBE EL CODIGO" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="controls form-control" type="number" name="apellidos" id="peque" placeholder="CANTIDAD" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="controls form-control" type="number" name="apellidos" id="peque" placeholder="PRECIO" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="div-boton col-2 d-flex justify-content-center align-items-center">
                        <input value="AGREGAR" class="boton controls " type="submit" name="apellidos" id="apellido">
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                </div>
            </div>
            <!-- tabla -->
            <div class="contentedor-tabla">
                <table class="table table-bordered border-primary">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO UND</th>
                        <th scope="col">SUBTOTAL</th>
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
                        <td><button class="boton-tabla">ELINIMAR</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">ELINIMAR</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">ELINIMAR</button></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            
              <!-- Cuarta sección -->
            <div class="contenedor-4">
                <div class="form-4 row" action="">
                    <div class="col-3 ">
                        <label for="nombres" class="email-imput">SUBTOTAL</label>
                    </div>
                    <div class="col-3">
                        <label for="nombres" class="email-imput">DESCUENTOS</label>
                    </div>
                    <div class="col-1">
                        <label for="nombres" class="email-imput">IVA</label>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4">
                        <label for="nombres" class="email-imput">TOTAL</label>
                    </div>

                </div>
                <div class="form-4 row" action="">
                    <div class="col-3">
                        <input class="w-medio line1 controls" type="text" name="nombres" id="nombre" placeholder="$00000000">
                    </div>
                    <div class="col-3">
                        <input class="w-medio line1 controls" type="text" name="nombres" id="nombre" placeholder="0%">
                    </div>
                    <div class="col-1">
                        <input class="w-pequeño line1 controls" type="text" name="nombres" id="iva" placeholder="0%">
                    </div>
                    <div class="col-1"></div>
                    <div class="w-largo col-4">
                        <input class="line1 controls" type="text" name="nombres" id="nombre" placeholder="$00000000">
                    </div>
                </div>
                <div class="row" action="">
                    <div class="col-9">
                    </div>
                    <div class="col-3">
                        <input class="boton-4 controls" type="submit" name="nombres" id="nombre" value="GUARDAR">
                    </div>
                </div>
            </div>
        </form>
        
    </main>
    <!-- Scripts -->
    <script src="validacionFormularios.js"></script>
    <script src="appCompras.js"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>