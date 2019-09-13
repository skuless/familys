<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Family's Gang</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home/particule.css') }}">
    
    @yield('link')
</head>

<body>
    <div id="app">

        <div id="particles-js"></div>

        <main>
            @yield('content')
        </main>
    </div>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Scripts des différentes pages -->
    <script src='{{ asset("js/ajax/table.js") }}'></script>

    {{-- @route == connects laravel routes to js --}}
    @routes

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <!-- stats.js lib --> 
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="{{ asset('js/particule/particule.js') }}"></script>

    @yield('script')
</body>
</html>
