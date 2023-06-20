@extends('layouts.inicio')
@section('content')
<main>
    {{-- <div class="h1-title">
        <h1>SOBRE NOSOTROS</h1>
    </div>
    <main class="principal">
        <p class="parrafo">
            Somos una tienda de abarrotes familiar, donde nos enfocamos en ofrecer productos de alta calidad a precios accesibles. Encontrarás todo lo que necesitas para tu hogar, desde alimentos básicos como arroz, frijoles, harina y azúcar, hasta productos de limpieza, cuidado personal y productos para tu mascota.
        </p>
        <div>
            <img src="{{ asset('Iconos/comida.png') }}" alt="">
        </div>
    </main>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body> --}}

<main  class="container">
</nav>
<div class="container hero">
    <div class="row" id="sobreNosotros">
        <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
            <h1 class="display-1 ">SOBRE NOSOTROS</h1>
            <p class="h4"> Somos una tienda de abarrotes familiar, donde nos enfocamos en ofrecer 
                productos de alta calidad a precios accesibles. Encontrarás todo lo que necesitas para tu
                 hogar, desde alimentos básicos como arroz, frijoles, harina y azúcar, hasta productos de 
                 limpieza, cuidado personal y productos para tu mascota.</p>
            <a
                class="btn btn-light btn-lg action-button" href="{{url("/Catalogo")}}">CATALOGO<i class="fa fa-long-arrow-right ml-2"></i></a>
        </div>
        <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
            <div class="iphone-mockup">
            <img class="device" src="{{ asset('Iconos/comida.png') }}">
            
              <!--  <div class="screen">
                </div>
                
                -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</main>

</main>
@endsection