@extends('app')

@section('seleccion')
    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
    <a class="nav-link" href="{{ route('conocimientos.index') }}">Conocientos</a>
    <a class="nav-link active" href="{{ route('proyectos.index') }}">Proyectos</a>
    <a class="nav-link" href="{{ route('trabajos.index') }}">Trabajos</a>
    <a class="nav-link" href="{{ route('educacions.index') }}">Educacion</a>
@endsection

@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf

            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('nombre')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('fecha_inicio')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('fecha_fin')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('descripcion')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('lenguaje')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('imagen')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('url_github')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('persona_id')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha inicio</label>
                <input type="date" name="fecha_inicio" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha fin</label>
                <input type="date" name="fecha_fin" class="form-control">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="lenguaje" class="form-label">Lenguaje</label>
                <input type="text" name="lenguaje" class="form-control">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Nombre de la imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="mb-3">
                <label for="url_github" class="form-label">URL github</label>
                <input type="text" name="url_github" class="form-control">
            </div>

            <div class="mb-3">
                <label for="persona_id" class="form-label">Proyectos de la persona</label>
                <select name="persona_id" class="form-select">
                    @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear proyecto de la persona</button>
        </form>

        <div>
            @foreach ($proyectos as $proyecto)
            <div class="row py-1 mt-3">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('proyectos.show', ['proyecto' => $proyecto->id]) }}">{{ $proyecto->nombre }} {{ $proyecto->descripcion }}</a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('proyectos.destroy', [$proyecto->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection