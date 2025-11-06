@extends('layout')

@section('title', 'Editar Vendedor')

@section('content')
    <div class="container">
        <h1>Formulario editar Vendedor</h1>
        <form action="{{ route('vendedores.update', $vendedor) }}" method="POST">
            @csrf
            @method('PUT')
            @include('vendedores.form', ['vendedor' => $vendedor])
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection