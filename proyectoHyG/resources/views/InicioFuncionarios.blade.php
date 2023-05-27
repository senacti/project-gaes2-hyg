<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión funcionario</title>
    <link rel="stylesheet" href="StyleSesionAE.css">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body id="body">
    <header id="header">
        <div class="logo">
            <img class="imgLogo" src="./../Iconos/image-removebg-preview.png" alt="Logo Empresa">
        </div>
        <nav class="nav-back">
            <a href="./../index.html">
                <img src="./../Iconos/back.jpg" alt="Atras">
            </a> 
        </nav>
    </header>
    <main>
        <form action="./../Menús Principales/DashboardAdmin.html" class="needs-validation" novalidate>
            <h2>FUNCIONARIOS</h2>
            <img id="funcionarioIcono" src="./../Iconos/funcionarioIcono.jpg" alt="Icono Usuario">
            <div>
                <input type="email" id="inputs" class="inputs controls form-control" id="validationCustom01" placeholder="Escriba su correo" required>
                <div class="invalid-feedback">
                    Ingrese un correo valido usando @
                </div>
            </div>          
            <div>
                <input type="password" id="inputs" class="controls form-control" id="validationCustom01" placeholder="Ingrese su contraseña" required>
                <div class="invalid-feedback">
                    por favor escriba su contraseña
                </div>
            </div>
            
            <div>
                <!-- <input type="submit" class="btn" value="INGRESAR"> -->
                <button id="botons" class="btn " type="submit">INGRESAR</button>
            </div>
            
            <a class="registrarse" href="./../Registros/resgistroEmpleado.html">REGISTRARSE</a>
            <a class="registrarse" href="./../Errores/Pconstrucción.html">RECUPERAR CONTRASEÑA</a>
            
        </form> 
    </main>
    <script src="validacionInicio.js"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>