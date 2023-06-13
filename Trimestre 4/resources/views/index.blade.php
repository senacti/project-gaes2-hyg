<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Boostrap ---> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="body">
    <header id="header">
        <div class="logo">
            <img class="imgLogo" src="{{ asset('Iconos/image-removebg-preview.png') }}" alt="Logo Empresa">
        </div>
        <nav class="nav-links">
            <ul class="menu-horizontal">
            <li> <a id="link" href="{{ url('/index') }}">HOME</a> </li>
                <li> <a id="link" href="{{ url('/Nosotros') }}">NOSOTROS</a> </li>
                <li> <a id="link" href="{{ url('/Contacto') }}">CONTACTO</a> </li>
                <li> <a id="link" href="{{ url('/InicioCliente') }}">INICIO DE SESION</a></li>
                <form id="Buscar" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </ul>
        </nav>
    </header>
    <main class="">
        <div class="">
            <section class="mercado">
                <div>
                    <h1 class="h1-mercado">MERCADO</h1>
                    <P>AL ALCANCE <br> DE TUS MANOS</P>
                </div>
            </section>
            <div class="comprar">
                
                <button onclick="location.href={{ url('/Catalogo') }}">CATALOGO</button>
                
            </div>
        </div>
    
        <img class="img-right"  src="{{ asset('Iconos/imgIndexClara.PNG') }}" alt="">
    </main>
    
    

    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<footer>

</footer>
</html>