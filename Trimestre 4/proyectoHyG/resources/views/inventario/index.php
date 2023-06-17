@extends('home')
@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br><br>
        <h3>Lista de clientes</h3>
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
                        <th scope="col">ID Cliente</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr class="">
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include("cliente.info")
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('cliente.create')
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
