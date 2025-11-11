
@extends('layout')

@section('title', 'Editar Producto')

@section('content')
    <div class="container">
        <h1>Formulario editar Producto</h1>
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            @include('productos.form')
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
