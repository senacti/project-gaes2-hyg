<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="StyleCatalogo.css" rel="stylesheet">
</head>

<body>
    <!--Barra de navegación-->
    <header id="header">
        <div class="logo">
            <img class="imgLogo" src="./../Iconos/image-removebg-preview.png" alt="Logo Empresa">
        </div>
        <nav class="nav-links">
            <ul class="menu-horizontal">
                <li> <a id="link" href="./../index.html">HOME</a> </li>
                <li> <a id="link" href="./../Nosotros.html">NOSOTROS</a> </li>
                <li> <a id="link" href="./../Contacto.html">CONTACTO</a> </li>
                <li> <a id="link" href="./../Inicio de sesion/InicioCliente.html">INICIO DE SESION</a></li>
                <form id="Buscar" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </ul>
        </nav>
    </header>
    <!--Contenido-->
    <main>
        <div>
            <p class="linea1">CATEGORIAS</p>
        </div>
        <div class="container1">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Despensa.png">
                        <div class="card-body">
                            <p class="titulos">DESPENSA</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a  href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co2">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Lacteos.png">
                        <div class="card-body">
                            <p class="titulos">LACTEOS, HUEVOS Y<br> REFRIGERADOS </p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co3">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Bebidas.png">
                        <div class="card-body">
                            <p class="titulos">BEBIDAS</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co4">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Limpieza.png">
                        <div class="card-body">
                            <p class="titulos">Limpieza</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Cuidado personal.png">
                        <div class="card-body">
                            <p class="titulos">Cuidado personal</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co2">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/Pasabocas.png">
                        <div class="card-body">
                            <p class="titulos">Pasabocas y dulces</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co3">
                    <div class="card shadow-sm">
                        <img src="./../Iconos/ProductosM.png">
                        <div class="card-body">
                            <p class="titulos">Productos para mascotas</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <a href="#" class="btn btn-success"id="botonproducto">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
<footer class="footer">

</footer>


</html>