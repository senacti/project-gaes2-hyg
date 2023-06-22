
@extends('layouts.inicio')
@section('content')



    <main class="main-contactos row">    
        
    <div class="h1-title">
        <h1>CONTACTO</h1>
    </div>
        <!-- <div class="col-1"></div> -->
        <section class="col-4 text-center">
            <img src="{{ asset('Iconos/Ubicacion.png') }}" alt="Icono ubicacion">
            <p>Carrera 88h # 71-63 sur</p>
            <p>Barrio Bosa San Antonio</p>
            <p>Bogotá D.C</p>
        </section>
        <section class="col-4 text-center">
            <img src="{{ asset('Iconos/telefono.png') }}" alt="Icono telefono">
                <p>318 838 1712</p>
                <p>317 741 4195</p>
        </section>
        </section>
        <section class="col-4 text-center">
            <img src="{{ asset('Iconos/gmail.png') }}" alt="Icono correo">
            <p>Harinasygranosvalencia <br> @gmail.com
            </p>
        </section>

    </main>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @endsection