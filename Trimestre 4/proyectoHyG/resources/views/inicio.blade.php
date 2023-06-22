@extends('layouts.inicio')
@section('content')



    <main  class="container-fluid">
            </nav>
            <div class="container hero">
                <div class="row" id="mercado">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1 class="display-2 ">MERCADO</h1>
                        <p class="fs-2">AL ALCANCE <br> DE TUS MANOS</p>
                        <a
                            class="btn btn-light btn-lg action-button" href="{{url("/Catalogo")}}">CATALOGO<i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup">
						<img class="device" src="{{ asset('Iconos/img_index.png') }}">
                        
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
    

    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
@endsection



