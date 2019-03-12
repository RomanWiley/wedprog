<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Schedule maker') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/wedprog.js') }}" defer></script>
    <script src="{{ secure_asset('js/wedprog.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wedprog.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/wedprog.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="../public/images/logo01wedprog.jpg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link text-light" href='/'>Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href='/inputschedule'>Schema maken</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href='/inputresults'>Uitslagen invullen</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Toernooien</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item nav-link text-dark" href="/program">Programma</a>
                              <a class="dropdown-item nav-link text-dark" href="/inputresults">Uitslagen invullen</a>
                              <a class="dropdown-item nav-link text-dark" href="/standings">Standen</a>
                            </div>
                          </li>
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
</body>
</html>
