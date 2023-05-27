<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro proveedores</title>
    <link rel="stylesheet" href="./SytleRegistroCliente.css">
    <link rel="stylesheet" href="./proveedoresStyle.css">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="body">
    <header id="header">
        <nav>
            <h1>Formulario de registro de la información del Proveedor</h1>
        </nav>
        <div class="logo">
            <img class="imgLogo" src="./../Iconos/image-removebg-preview.png" alt="Logo Empresa">
        </div>
        
    </header>
    <main>
        <form class="container needs-validation" novalidate>
            <!-- nombres y apellidos -->
            <div class="row">
                <div class="col-6">
                    <label for="nombres">Nombres</label>
                </div>
                <div class="col-6">
                    <label for="apellidos">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="nombres" id="nombre" placeholder="Escriba el nombre" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="apellidos" id="apellido" placeholder="Escriba el apellido" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>
            </div>
            <!-- Celular y empresa -->
            <div class="row" action="">
                <div class="col-6">
                    <label for="Celular">Celular</label>
                </div>
                <div class="col-6">
                    <label for="Empresa">Empresa</label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="number" name="Celular" id="correo" placeholder="Escriba el numero celular" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="Empresa" id="direccion" placeholder="Escriba el nomre de la emprea" required>
                    <div class="invalid-feedback">
                        campo obligatorio
                    </div>
                </div>
            </div>
            <!-- Correo -->
            <div class="row" action="">
                <div class="col-6">
                    <label for="correo">Correo</label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="email" name="correo" id="celular" placeholder="Ingrese el correo" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>        
            </div>
            <!-- botones -->
            <div class="row" id="inputButon">
                <button class="col-4" id="boton">Regresar</button>
                <button class="col-4" id="boton">nuevo</button>
                <button class="col-4" id="boton">Regitrar</button>
                <!-- <button type="submit" class="boton-noValida" >Submit without validation</button> -->
                <!-- <input class="col-4" id="boton" type="submit" value="Regresar"> -->
                <!-- <input class="col-4" id="boton" type="submit" value="Nuevo">
                <input class="col-4" id="boton" type="submit" value="Registrar"> -->
            </div>
        </form> 
    </main>
    <footer>

    </footer>
    <script src="validacionRegistros.js"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>