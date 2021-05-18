<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="http://drive.google.com/uc?export=view&id=1UpyHgQ9jYR4aaxlIfSoyWupH-JjGHJ8s">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Golmo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!--<body>
    <div id="app">
        <nav class="navbar navbar-expand " style="padding:0; margin:0;">
            <div class="container m-0 p-0" style="height:0">
            </div>
        </nav>

        <main style="padding:0; margin:0;">
            @yield('content')
        </main>
    </div>
        
</body>-->
</html>
