@extends('layout')

@section('title', 'Lista de productos')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Vendedores</h2>
    <a href="{{ route('vendedores.create') }}" class="btn btn-success">
    ⚪ Crear Vendedor 
    </a>
</div>

@if ($vendedores->count())
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vend)
            <tr>
                <td>{{ $vend->id }}</td>
                <td>{{ $vend->nombre }}</td>
                <td>{{ $vend->cargo }}</td>
                <td>{{ $vend->telefono }}</td>
                <td>
                    <a href="{{ route('vendedores.edit', $vend) }}" class="btn btn-sm btn-primary me-1">Editar</a>

                    <form action="{{ route('vendedores.destroy', $vend) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este vendedor? Esta acción no se puede deshacer.');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p class="text-muted">No hay Vendedores aún.</p>
@endif
@endsection

