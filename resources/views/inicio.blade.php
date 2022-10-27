@extends('layout/plantilla')

@section('tituloPagina' , 'CRUD con laravel 9')

@section('contenido')
    <div class="card mt-5">
        <h5 class="card-header text-center">CRUD con Laravel 9 y MySQL</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ $mensaje }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">Listado de personas en el sistema</h5>
            <div class="table table-responsive text-center">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->apellido_paterno}}</td>
                                <td>{{$item->apellido_materno}}</td>
                                <td>{{$item->fecha_nacimiento}}</td>
                                <td>
                                    <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a href="{{route('personas.create')}}" class="btn btn-primary">
                        <span class="fas fa-user-plus"></span>
                        Agregar nueva persona</a>
                </div>
                <div class="col-sm">
                    {{$datos->links()}}
                </div>
                
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <h1>CRUD con laravel 9</h1>
        </div>
        <div class="col">
            <h1>PHP 8</h1>
        </div>
        <hr>
        <div class="row">
            <a href="{{route('personas.create')}}">Agregar</a>
            <a href="{{route('personas.edit')}}">Editar</a>
            <a href="{{route('personas.destroy')}}">Eliminar</a>
        </div>
    </div> --}}
@endsection