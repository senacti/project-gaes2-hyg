@extends('home')
@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br><br>
            <h3>Registrar Ventas</h3>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <a href="{{route('ventas.pdf')}}" class="btn btn-success">PDF</a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID Venta</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $venta)
                        <tr class="">
                            <td scope="row">{{$venta->id}}</td>
                            <td>{{$venta->fecha}}</td>
                            <td>{{$venta->producto}}</td>
                            <td>{{$venta->cantidad}}</td>
                            <td>{{$venta->precio}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$venta->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$venta->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include("ventas.modalVentaInfo")
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('ventas.modalVentaCreate')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
