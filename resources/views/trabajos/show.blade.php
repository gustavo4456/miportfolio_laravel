@extends('app')

@section('seleccion')
    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
    <a class="nav-link" href="{{ route('conocimientos.index') }}">Conocientos</a>
    <a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a>
    <a class="nav-link active" href="{{ route('trabajos.index') }}">Trabajos</a>
    <a class="nav-link" href="{{ route('educacions.index') }}">Educacion</a>
@endsection

@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{ route('trabajos.update', ['trabajo' => $trabajo->id]) }}" method="POST">
            @method('PATCH')
            @csrf

            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('tipo')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('ocupacion')
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
            @error('persona_id')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" name="tipo" class="form-control" value="{{ $trabajo->tipo }}">
            </div>
            <div class="mb-3">
                <label for="ocupacion" class="form-label">Ocupación</label>
                <input type="text" name="ocupacion" class="form-control" value="{{ $trabajo->ocupacion }}">
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha inicial</label>
                <input type="date" name="fecha_inicio" class="form-control" value="{{ $trabajo->fecha_inicio }}">
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de finalización</label>
                <input type="date" name="fecha_fin" class="form-control" value="{{ $trabajo->fecha_fin }}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control">{{ $trabajo->descripcion }}</textarea>
            </div>


            <div class="mb-3">
                <label for="persona_id" class="form-label">Trabajos de la persona</label>
                <select name="persona_id" class="form-select">
                    @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}" @if ($persona->id == $trabajo->persona_id)
                        selected="selected"
                    @endif>{{ $persona->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar trabajo</button>
        </form>
    </div>
</div>
@endsection