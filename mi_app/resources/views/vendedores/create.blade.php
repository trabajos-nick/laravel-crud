@extends('layout')

@section('title', 'Crear vendedor')

@section('content')
<h2>Crear nuevo vendedor</h2>

<form action="{{ route('vendedores.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input type="text" name="cargo" id="cargo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
