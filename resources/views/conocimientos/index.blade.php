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
            <form action="{{ route('conocimientos.store') }}" method="POST">
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

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" name="nivel" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="persona_id" class="form-label">Conocimientos de la persona</label>
                    <select name="persona_id" class="form-select">
                        @foreach ($personas as $persona)
                            <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Crear conocimiento de la persona</button>
            </form>

            <div>
                @foreach ($conocimientos as $conocimiento)
                    <div class="row py-1 mt-3">
                        <div class="col-md-9 d-flex align-items-center">
                            <a
                                href="{{ route('conocimientos.show', ['conocimiento' => $conocimiento->id]) }}">{{ $conocimiento->nombre }}</a>
                        </div>

                        <div class="col-md-3 d-flex justify-content-end">
                            <form action="{{ route('conocimientos.destroy', [$conocimiento->id]) }}" method="POST">
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
