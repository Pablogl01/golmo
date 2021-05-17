<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
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
<body>
    <div id="app" style="font-family: 'Average Sans', sans-serif;">
        <nav class="navbar navbar-expand" style="padding:0 !important;padding-top:2vh !important;padding-bottom:2vh !important;">
            <div class="d-flex flex-row justify-content-center align-items-center" style="padding:0; width:100%">
                <div class="d-flex flex-row justify-content-center align-items-center" style="width:50%;">
                    <a style="position:absolute;left:2vw; margin-left:15px" class="navbar-brand" href="{{ url('/home') }}">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="75pt" height="54.000000pt" viewBox="0 0 367.000000 54.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <metadata>
                        Created by potrace 1.16, written by Peter Selinger 2001-2019
                        </metadata>
                        <g transform="translate(0.000000,54.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M0 485 l0 -55 294 0 294 0 31 29 c19 18 31 39 31 55 l0 26 -325 0
                        -325 0 0 -55z"/>
                        <path d="M750 535 c0 -3 6 -21 14 -39 27 -65 33 -66 314 -66 167 0 261 4 275
                        11 31 16 57 50 57 77 l0 22 -330 0 c-181 0 -330 -2 -330 -5z"/>
                        <path d="M1510 270 l0 -270 298 0 c322 0 322 1 351 57 28 54 34 53 -259 53
                        l-270 0 0 215 0 215 -60 0 -60 0 0 -270z"/>
                        <path d="M2260 483 l0 -58 147 -147 c127 -128 151 -148 178 -148 27 0 51 20
                        178 148 l147 147 0 58 0 57 -33 0 c-28 0 -49 -16 -162 -130 l-130 -130 -130
                        130 c-113 113 -134 130 -163 130 l-32 0 0 -57z"/>
                        <path d="M3021 508 c5 -18 20 -43 34 -55 26 -23 31 -23 281 -23 208 0 260 3
                        284 15 33 17 50 43 50 74 0 21 -3 21 -329 21 l-330 0 10 -32z"/>
                        <path d="M750 165 l0 -165 330 0 330 0 0 165 0 165 -60 0 -60 0 0 -110 0 -110
                        -210 0 -210 0 0 110 0 110 -60 0 -60 0 0 -165z"/>
                        <path d="M3010 165 l0 -165 330 0 330 0 0 165 0 165 -55 0 -55 0 0 -110 0
                        -110 -215 0 -215 0 0 110 0 110 -60 0 -60 0 0 -165z"/>
                        <path d="M0 189 l0 -131 29 -29 29 -29 296 0 296 0 0 160 0 160 -221 0 -221 0
                        6 -27 c4 -16 20 -40 37 -55 29 -28 31 -28 159 -28 l130 0 0 -50 0 -50 -195 0
                        c-241 0 -235 -3 -235 125 l0 85 -55 0 -55 0 0 -131z"/>
                        <path d="M2260 142 l0 -142 60 0 60 0 0 83 0 83 -60 59 -60 59 0 -142z"/>
                        <path d="M2847 222 l-57 -58 0 -82 0 -82 60 0 60 0 0 140 c0 77 -1 140 -3 140
                        -1 0 -28 -26 -60 -58z"/>
                        </g>
                        </svg>
                    </a>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center" style="width:50%;">
                    <div class="d-flex align-items-center" id="navbarSupportedContent" style="width:50%;margin-left:50%;">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto" style="width:100%;">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                <div class="d-flex flex-row justify-content-center align-items-center" style="width:70%;">
                                    <a href="{{route('profile')}}" style="color:black;font-size:16px;text-decoration:none;">CUENTA GOLMO</a>
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center" style="width:30%;">
                                    <li class="nav-item dropdown d-flex flex-row justify-content-center align-items-center">
                                        <a id="navbarDropdown" class="d-flex flex-row justify-content-center align-items-center navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <svg height="15pt" viewBox="0 -53 384 384" width="15pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding-top:0 !important;">
            @yield('content')
        </main>
    </div>
</body>
</html>
