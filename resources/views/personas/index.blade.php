@extends('app')

@section('seleccion')
<a class="nav-link active" href="{{ route('personas.index') }}">Personas</a>
<a class="nav-link" href="{{ route('conocimientos.index') }}">Conocientos</a>
<a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a>
<a class="nav-link" href="{{ route('trabajos.index') }}">Trabajos</a>
<a class="nav-link" href="{{ route('educacions.index') }}">Educacion</a>
@endsection


@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{ route('personas.store') }}" method="POST">
            @csrf

            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('nombre')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('apellido')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('fecha_nacimiento')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('celular')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('correo')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('presentacion_primaria')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('presentacion_secundaria')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la persona</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido de la persona</label>
                <input type="text" name="apellido" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento de la persona</label>
                <input type="date" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Número de celular de la persona</label>
                <input type="tel" name="celular" class="form-control" pattern="[0-9]{10}">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo de la persona</label>
                <input type="email" name="correo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="presentacion_principal" class="form-label">Presentacion principal de la persona</label>
                <textarea name="presentacion_principal" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="presentacion_secundaria" class="form-label">Presentacion secundaria de la persona</label>
                <textarea name="presentacion_secundaria" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva persona</button>
        </form>

        <div>
            @foreach ($personas as $persona)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a class="d-flex align-items-center gap-2" href="{{ route('personas.show', ['persona' => $persona->id]) }}">
                        <strong>{{ $persona->id }}</strong> {{ $persona->nombre }} {{$persona->apellido}}
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$persona->id}}">
                        Eliminar
                    </button>
                </div>
            </div>

            <div class="modal fade" id="modal-{{ $persona->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Persona</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Al eliminar la persona <strong>{{ $persona->nombre }}</strong> se eliminan todos los datos asignados a la misma.
                            ¿Está seguro que desea eliminar la persona <strong>{{ $persona->nombre }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <form action="{{ route('personas.destroy',['persona' => $persona->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection