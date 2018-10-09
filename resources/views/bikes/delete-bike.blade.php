@extends('template.layout')

@section('title', 'Eliminar')

@section('content')
    <h1 class="my-2">Pimer ejemplo con Laravel</h1>
    <h2>Bienvenido a Larabikes</h2>
    <p>Confirmar la eliminación de la moto {{$bike->marca.' '.$bike->modelo}}</p>
    <form action="{{route('bikes.destroy', $bike->id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" alt="Borrar" title="Borrar" class="btn btn-danger" value="Confirmar eliminacion">
    </form>
@endsection