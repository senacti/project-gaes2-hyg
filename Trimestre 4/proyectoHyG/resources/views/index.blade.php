
    @extends('layouts.guest')
    @section('title', 'Inicio')
    @section('content')
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
    @endsection
