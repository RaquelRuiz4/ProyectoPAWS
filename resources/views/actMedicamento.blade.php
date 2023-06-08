@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Medicamento</h1>
        <form action="{{ route('medicamentos.update', $medicamento->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $medicamento->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" value="{{ $medicamento->cantidad }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
