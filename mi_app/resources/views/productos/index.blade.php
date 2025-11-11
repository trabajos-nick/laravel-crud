
@extends('layout')

@section('title', 'Lista de productos')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Productos</h2>
    <a href="{{ route('productos.create') }}" class="btn btn-success">
    ⚪ Crear Producto 
    </a>
</div>

@if ($productos->count())
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nombre }}</td>
                <td>{{ $prod->precio }}</td>
                <td>{{ $prod->stock }}</td>
                <td>{{ $prod->categoria->nombre ?? '' }}</td>
                <td>
                    <a href="{{ route('productos.edit', $prod) }}" class="btn btn-sm btn-primary me-1">Editar</a>

                    <form action="{{ route('productos.destroy', $prod) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este producto? Esta acción no se puede deshacer.');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p class="text-muted">No hay Productos aún.</p>
@endif
@endsection
