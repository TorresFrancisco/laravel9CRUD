@extends('layout/plantilla')

@section('tituloPagina' , 'Crear nuevo registro')

@section('contenido')
    <div class="card mt-5">
        <h5 class="card-header">Agregar nueva Persona</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('personas.store')}}" method="POST">
                    @csrf
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                    
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" required>
                    
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" required>
                    
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>

                    <div class="mt-3">
                        <a href="{{ route("personas.index")}}" class="btn btn-secondary">
                            <span class="fas fa-undo-alt"></span> Volver a Inicio</a>
                        <button class="btn btn-primary">
                            <span class="fas fa-user-plus"></span> Agregar</button>
                    </div>
                </form>
            </p>
        </div>                  
    </div>

@endsection