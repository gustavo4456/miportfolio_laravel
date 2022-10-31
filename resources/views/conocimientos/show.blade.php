@extends('app')

@section('seleccion')
    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
    <a class="nav-link active" href="{{ route('conocimientos.index') }}">Conocientos</a>
    <a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a>
    <a class="nav-link" href="{{ route('trabajos.index') }}">Trabajos</a>
    <a class="nav-link" href="{{ route('educacions.index') }}">Educacion</a>
@endsection

@section('content')
    <div class="container w-25 border p-4 my-4">
        <div class="row mx-auto">
            <form action="{{ route('conocimientos.update', ['conocimiento' => $conocimiento->id]) }}" method="POST">
                @method('PATCH')
                @csrf

                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                @error('nombre')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('nivel')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('persona_id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="mb-3">
                    <label for="nombre" class="form-label">Conocimiento</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $conocimiento->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" name="nivel" class="form-control" value="{{ $conocimiento->nivel }}">
                </div>

                <div class="mb-3">
                    <label for="persona_id" class="form-label">Conocimientos de la persona</label>
                    <select name="persona_id" class="form-select">
                        @foreach ($personas as $persona)
                            <option value="{{ $persona->id }}"
                                @if ($persona->id == $conocimiento->persona_id) selected="selected" @endif>{{ $persona->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar conocimiento</button>
            </form>
        </div>
    </div>
@endsection
