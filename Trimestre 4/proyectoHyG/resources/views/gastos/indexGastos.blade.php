@extends('home')
@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br><br>
            <h3>Registrar Gastos</h3>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <a href="{{route('gastos.pdf')}}" class="btn btn-success">PDF</a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID Gasto</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gastos as $gasto)
                        <tr class="">
                            <td scope="row">{{$gasto->id}}</td>
                            <td>{{$gasto->fecha}}</td>
                            <td>{{$gasto->descripcion}}</td>
                            <td>{{$gasto->valor}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$gasto->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$gasto->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include("gastos.modalGastosInfo")
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('gastos.modalGastosCreate')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
