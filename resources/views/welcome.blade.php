@extends('template.layout')

@section('title', 'Portada')

@section('content')
    <h1 class="my-2">Primer ejemplo de laravel</h1>
    <h2>Bienvenido a Larabikes</h2>
    <p>Se ha implementado un CRUD con motos.</p>
    <div class="row">
        <img src="{{url('/public/images/motorbike.png')}}" class="img-fluid" alt="Responsive image">
    </div>
@endsection