@extends('layout/plantilla')

@section('tituloPagina' , 'Actualizar registro')

@section('contenido')
    <div class="card mt-5">
        <h5 class="card-header">Actualizar Persona</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre}}">
                    
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno}}">
                    
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" required value="{{ $personas->materno}}">
                    
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $personas->fecha_nacimiento}}">

                    <div class="mt-3">
                        <a href="{{ route("personas.index")}}" class="btn btn-secondary">
                            <span class="fas fa-undo-alt"></span> Volver a Inicio</a>
                        <button class="btn btn-warning">Actualizar</button>
                    </div>
                </form>
            </p>
        </div>                  
    </div>

@endsection