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
        <form action="{{ route('personas.update', ['persona' => $persona->id]) }}" method="POST">
            @method('PATCH')
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
                <input type="text" name="nombre" class="form-control" value="{{ $persona->nombre }}">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido de la persona</label>
                <input type="text" name="apellido" class="form-control" value="{{ $persona->apellido }}">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento de la persona</label>
                <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $persona->fecha_nacimiento }}">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Número de celular de la persona</label>
                <input type="tel" name="celular" class="form-control" pattern="[0-9]{10}" value="{{ $persona->celular }}">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo de la persona</label>
                <input type="email" name="correo" class="form-control" value="{{ $persona->correo }}">
            </div>
            <div class="mb-3">
                <label for="presentacion_principal" class="form-label">Presentacion principal de la persona</label>
                <textarea name="presentacion_principal" class="form-control">{{ $persona->presentacion_principal }}</textarea>
            </div>
            <div class="mb-3">
                <label for="presentacion_secundaria" class="form-label">Presentacion secundaria de la persona</label>
                <textarea name="presentacion_secundaria" class="form-control">{{ $persona->presentacion_secundaria }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar persona</button>
        </form>

        <div class="mt-3">
            @if ($persona->conocimientos->count() > 0)
            <h6>Conocimientos que tiene la persona</h6>
            @foreach ($persona->conocimientos as $conocimiento)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('conocimientos.update', ['conocimiento' => $conocimiento->id]) }}">{{ $conocimiento->nombre }}</a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('conocimientos.destroy', ['conocimiento' => $conocimiento->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach

            @else

            <h6>No hay concimientos para esta persona.</h6>

            @endif

            @if ($persona->trabajos->count() > 0)
            <h6>Trabajos que tiene la persona</h6>
            @foreach ($persona->trabajos as $trabajo)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('trabajos.update', ['trabajo' => $trabajo->id]) }}">{{ $trabajo->descripcion }}</a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('trabajos.destroy', ['trabajo' => $trabajo->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach

            @else

            <h6>No hay trabajos para esta persona.</h6>

            @endif

            @if ($persona->proyectos->count() > 0)
            <h6>Proyectos que tiene la persona</h6>
            @foreach ($persona->proyectos as $proyecto)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('proyectos.update', ['proyecto' => $proyecto->id]) }}">{{ $proyecto->descripcion }}</a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('proyectos.destroy', ['proyecto' => $proyecto->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach

            @else

            <h6>No hay proyectos para esta persona.</h6>

            @endif

            @if ($persona->educacions->count() > 0)
            <h6>Educacion que tiene la persona</h6>
            @foreach ($persona->educacions as $educacion)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('educacions.update', ['educacion' => $educacion->id]) }}">{{ $educacion->descripcion }}</a>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('educacions.destroy', ['educacion' => $educacion->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach

            @else

            <h6>No hay items de educacion para esta persona.</h6>

            @endif
        </div>
    </div>
</div>
@endsection