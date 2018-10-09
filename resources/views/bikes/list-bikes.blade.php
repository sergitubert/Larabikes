@extends('template.layout')

@section('title', 'Mi garaje')

@section('content')
    <h1 class="my-2">Primer ejemplo con Laravel</h1>
    <h2>Bienvenido a Larabikes</h2>
    <p>Listado de motos</p>

    @include('template.success')
    <div class="row">
        <div class="col-6 text-left">
            {{ $bikes->links() }}
        </div>
        <div class="col-6 text-right">
            <p>Nueva Moto <a href="{{route('bikes.create')}}" class="btn btn-success ml-2">+</a></p>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered table-condensed">
            <tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Operaciones</th></tr>
            @foreach($bikes as $bike)
                <tr>
                    <td>{{$bike->id}}</td>
                    <td>{{$bike->marca}}</td>
                    <td>{{$bike->modelo}}</td>
                    <td class="text-center">
                        <a href="{{route('bikes.show', $bike->id)}}">Ver /</a>
                        <a href="{{route('bikes.edit', $bike->id)}}">Editar /</a>
                        <a href="{{url('bikes/delete/'.$bike->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </table>
        <p>Mostrando {{sizeof($bikes)}} de {{ $total }}</p>
    </div>
@endsection