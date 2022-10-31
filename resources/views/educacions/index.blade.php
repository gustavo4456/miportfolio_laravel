@extends('app')

@section('seleccion')
    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
    <a class="nav-link" href="{{ route('conocimientos.index') }}">Conocientos</a>
    <a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a>
    <a class="nav-link" href="{{ route('trabajos.index') }}">Trabajos</a>
    <a class="nav-link active" href="{{ route('educacions.index') }}">Educacion</a>
@endsection

@section('content')
    <div class="container w-25 border p-4 my-4">
        <div class="row mx-auto">
            <form action="{{ route('educacions.store') }}" method="POST">
                @csrf

                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('institucion')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('nivel')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('estado')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('descripcion')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('persona_id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror

                <div class="mb-3">
                    <label for="institucion" class="form-label">Institucion</label>
                    <input type="text" name="institucion" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" name="nivel" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="persona_id" class="form-label">Educacion de la persona</label>
                    <select name="persona_id" class="form-select">
                        @foreach ($personas as $persona)
                            <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Crear educacion de la persona</button>
            </form>

            <div>
                @foreach ($educacions as $educacion)
                    <div class="row py-1 mt-3">
                        <div class="col-md-9 d-flex align-items-center">
                            <a href="{{ route('educacions.show', ['educacion' => $educacion->id]) }}">{{ $educacion->institucion }}
                                {{ $educacion->descripcion }}</a>
                        </div>

                        <div class="col-md-3 d-flex justify-content-end">
                            <form action="{{ route('educacions.destroy', [$educacion->id]) }}" method="POST">
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
