<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página con un ejemplo CRUD con Laravel - Larabikes">
    <title>Larabikes - @yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body>
    @include('template.navbar')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ url('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>