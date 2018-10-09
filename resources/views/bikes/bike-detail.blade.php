@extends('template.layout)

@section('title', 'Detalles')

@section('content')
    <h1 class="my-2">Primer ejemplo de Laravel</h1>
    <h2>Bienvenido a Larabikes</h2>
    <p>Detalles de la moto {{$bike->marca.' '.$bike->modelo}}</p>

    <table class="table table-striped table-condensed table-bordered">
        <tr><td>ID</td><td>{{ $bike->id }}</td></tr>
        <tr><td>Marca</td><td>{{ $bike->marca }}</td></tr>
        <tr><td>Modelo</td><td>{{ $bike->modelo }}</td></tr>
        <tr><td>Precio</td><td>{{ $bike->precio }}</td></tr>
        <tr><td>Kms</td><td>{{ $bike->kms }}</td></tr>
        <tr>
            <td>Matriculada</td>
            <td>{{ !empty($bike->matriculada) ? 'Si' : 'No' }}</td>
        </tr>
    </table>
    <div class="text-right my-3">
        <div class="btn-group mx-2">
            <a href="{{ route('bikes.edit', $bike->id) }}" class="mx-2 btn btn-warning">Editar</a>
            <a href="{{ url('/bikes/delete/'.$bike->id) }}" class="mx-2 btn btn-danger">Eliminar</a>
        </div>
    </div>
@endsection