<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    {!! MaterializeCSS::include_full() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UGame') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lib/particles.min.js') }}"></script>
</head>
<body>
    @guest
    <div>
        <div id="particles-js" class="app-wallpaper"></div>
    </div>
    @endguest
    <div id="app" class="{{Auth::check() ? 'auth' :''}}">
        @include('navbar.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/pages/planet.js') }}"></script>
    <script src="{{ asset('js/components/navbar.js') }}"></script>
</body>
</html>
