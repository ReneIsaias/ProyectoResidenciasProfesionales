<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'T E S J I') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    {{-- <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Custom styles for this template -->
    {{-- <link href="asset/css/modern-business.css" rel="stylesheet"> --}}

    <!-- Mis estilos -->
    {{-- <link href="asset/css/misEstilos.css" rel="stylesheet"> --}}
</head>
<body>
    <nav>
        @extends('nav.nave')
        <br><br>
    </nav>
    <main class="py-5">
        @yield('content')
    </main>
    <footer>
        @extends('footer.foot')
    </footer>
</body>
</html>
