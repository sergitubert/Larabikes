@extends('template.layout')

@section('title', 'Editar')

@section('content')
    <h1 class="my-2">Primer ejemplo con Laravel</h1>
    <h2>Bienvenido a Larabikes</h2>
    <p>Actualizar la moto {{ $bike->marca.''.$bike->modelo }}</p>
    @include('template.success')
    @include('template.error')
    <form action="{{route('bikes.update', $bike->id)}}" method="POST" class="my-2 border p-5">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
            <input type="text" name="marca" value="{{$bike->marca}}" class="up form-control col-sm-10"
                   id="inputMarca" placeholder="Marca..." max="32" required>
        </div>
        <div class="form-group">
            <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
            <input type="text" class="form-control col-sm-10" name="modelo" id="inputModelo"
                   placeholder="Modelo..." maxlength="32" required value="{{ $bike->modelo }}">
        </div>
        <div class="form-group">
            <label for="inputKms" class="col-sm-2 col-form-label">Kilómetros</label>
            <input type="number" class="form-control col-sm-4" name="kms" id="inputKms"
                   placeholder="Kms..." maxlength="32" required value="{{ $bike->kms }}">
        </div>
        <div class="form-group">
            <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
            <input type="number" class="form-control col-sm-4" name="precio" id="inputPrecio"
                   placeholder="Precio..." maxlength="8" min="0" required value="{{ $bike->precio }}">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="matriculada" value="1"
                        {{ empty($bike->matriculada) ? '' : 'checked' }}>
                <label for="matriculada" class="form-check-label">Matriculada</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mx-2">Guardar</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
@endsection