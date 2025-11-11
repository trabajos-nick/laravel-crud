
@extends('layout')
@section('title', 'Crear producto')
@section('content')

<h2>Crear nuevo producto</h2>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    {{-- Enviamos $categorias al partial --}}
    @include('productos.partials.form', [
            'categorias' => $categorias
        ])

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
