{{-- @extends('home')
@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br><br>
            <h3>INVENTARIO</h3>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID producto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio unit</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr class="">
                            <td scope="row">{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->precio_unit}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include("inventario.info")
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('inventario.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection --}}
holamundo
