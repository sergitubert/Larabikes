@extends('template.layout')

@section('title', 'Crear moto')

@section('content')
    <h1 class="my-2">Añadir moto</h1>
    @include('template.error')
    <form action="{{route('bikes.store')}}" method="POST" class="my-2 border p-5">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <input type="text" class="up form-control col-sm-10" name="marca" id="inputMarca"
                       placeholder="Marca..." maxlength="32" required value="{{ old('marca') }}">
            </div>
        <div class="form-group">
            <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
            <input type="text" class="form-control col-sm-10" name="modelo" id="inputModelo"
                   placeholder="Modelo..." maxlength="32" required value="{{ old('modelo') }}">
        </div>
        <div class="form-group">
            <label for="inputKms" class="col-sm-2 col-form-label">Kilómetros</label>
            <input type="number" class="form-control col-sm-4" name="kms" id="inputKms"
                   placeholder="Kms..." maxlength="32" required value="{{ old('kms') }}">
        </div>
        <div class="form-group">
            <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
            <input type="number" class="form-control col-sm-4" name="precio" id="inputPrecio"
                   placeholder="Precio..." maxlength="8" min="0" required value="{{ old('precio') }}">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="matriculada" value="1"
                {{ empty(old('matriculada')) ? '' : 'checked' }}>
                <label for="matriculada" class="form-check-label">Matriculada</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mx-2">Guardar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
        </form>
@endsection