@extends('home')
@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br><br>
            <h3>Registrar Compras</h3>

            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <a href="{{route('compras.pdf')}}" class="btn btn-success">PDF</a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID Venta</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)
                        <tr class="">
                            <td scope="row">{{$compra->id}}</td>
                            <td>{{$compra->fecha}}</td>
                            <td>{{$compra->proveedor}}</td>
                            <td>{{$compra->producto}}</td>
                            <td>{{$compra->cantidad}}</td>
                            <td>{{$compra->precio}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$compra->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$compra->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include("compras.modalComprasInfo")
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('compras.modalComprasCreate')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
