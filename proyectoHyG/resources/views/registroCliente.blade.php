<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro cliente</title>
    <link rel="stylesheet" href="./SytleRegistroCliente.css">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="body">
    <header id="header">
        <nav>
            <h1>Formulario de registro de Cliente</h1>
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
                    <label for="nombres" class="email-imput">Nombres</label>
                </div>
                <div class="col-6">
                    <label for="apellidos">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="nombres" id="nombre" placeholder="Escriba su nombre" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="apellidos" id="apellido" placeholder="Escriba su apellido" required>
                    <div class="invalid-feedback">
                        Campo obligatorio
                    </div>
                </div>
            </div>
            <!-- correo y direccion -->
            <div class="row" action="">
                <div class="col-6">
                    <label for="correo" class="email-imput">Correo</label>
                </div>
                <div class="col-6">
                    <label for="direccion">Direccion</label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="email" name="correo" id="correo" placeholder="Escriba su correo" required>
                    <div class="invalid-feedback">
                        Ingrese un correo valido usando @
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="text" name="direccion" id="direccion" placeholder="Escriba su direccion" required>
                    <div class="invalid-feedback">
                        Por favor ingrese la dirección de su domicilio
                    </div>
                </div>
            </div>
            <!-- celular y telefono -->
            <div class="row" action="">
                <div class="col-6">
                    <label for="celular" class="email-imput">Celular</label>
                </div>
                <div class="col-6">
                    <label for="telefono">Telefono</label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="number" name="celular" id="celular" placeholder="Ingrese su numero de celular" required>
                    <div class="invalid-feedback">
                        Numero celular es requerido
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls" type="number" name="telefono" id="telefono" placeholder="   Ingrese numero telefonico" >
                    <div class="invalid-feedback">
                        Escriba su numero telefonico
                    </div>
                </div>
            </div>
            <!-- contraseña y confirmar contraseña -->
            <div class="row" action="">
                <div class="col-6">
                    <label for="contraseña" class="email-imput">contraseña</label>
                </div>
                <div class="col-6">
                    <label for="confirmar-contraseña">Confirmar contraseña</label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="password" name="contraseña" id="contraseña" placeholder="Escriba su contraseña" required>
                    <div class="invalid-feedback">
                        Contraseña requerida
                    </div>
                </div>
                <div class="col-6">
                    <input id="inputs" class="controls form-control" type="password" name="confirmar-contraseña" id="confirmar-contraseña" placeholder="Confirmar contraseña" required>
                    <div class="invalid-feedback">
                        Ingrese su contraseña nuevamente
                    </div>
                </div>
            </div>
            <!-- genero -->
            <div class="row" action="">
                <div class="col-6" id="input-masculino">
                    <label for="genero" class="email-imput"><img  class="generos" src="./../Iconos/masculino.jpg" alt="masculino"></label>
                </div>
                <div class="col-6" id="input-femenino">
                    <label for="genero"><img class="generos" src="./../Iconos/femenino.jpg" alt="femenino"></label>
                </div>
            </div>
            <div class="row" action="">
                <div class="col-6" id="checkbox-masculino">
                    <input type="radio" name="genero" id="Generos" required> 
                    <!-- <input class="controls" type="checkbox" name="genero" id="masculino" > -->
                </div>
                <div class="col-6" id="checkbox-femenino" >
                    <input type="radio" name="genero" id="Generos" required>
                    <!-- <input class="controls" type="checkbox" name="genero" id="femenino"> -->
                </div>
            </div>
            <!-- boton de registrar -->
            <div class="row" id="input">
                <div class="col-9"></div>
                <input class="col-3" id="registrar" type="submit" value="Registrar ">
            </div>
        </form>
       
    </main>
    <script src="validacionRegistros.js"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>