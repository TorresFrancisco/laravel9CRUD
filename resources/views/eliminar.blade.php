@extends('layout/plantilla')

@section('tituloPagina' , 'Crear nuevo registro')

@section('contenido')
    <div class="card mt-5">
        <h5 class="card-header">Eliminar una Persona</h5>
        <div class="card-body">
            <p class="card-text">
                <div class="alert alert-danger text-center" role="alert">
                    ¿Estás seguro de eliminar este registro?

                    <div class="table-table-responsive  mt-3">
                        <table class="table table-light table-striped table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Fecha de Nacimiento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{$personas->id}} </td>
                                    <td> {{$personas->nombre }} </td>
                                    <td> {{$personas->apellido_paterno}} </td>
                                    <td> {{$personas->apellido_materno}} </td>
                                    <td> {{$personas->fecha_nacimiento}} </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route("personas.destroy", $personas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="mt-3">
                                <a href="{{ route("personas.index")}}" class="btn btn-secondary">
                                    <span class="fas fa-undo-alt"></span> Volver a Inicio</a>
                                <button class="btn btn-danger">
                                    <span class="fas fa-user-times"></span> Eliminar
                                </button>
                            </div>
                        </form>
                    </div>
                  </div>
            </p>
        </div>                  
    </div>

@endsection