<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="header">
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid p-0">
                                <a class="navbar-brand" href="/home">
                                    <!-- <img src="{{ asset('assets/images/logo.png') }}" alt=""> -->
                                    <h4>KleeblattGames</h4>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main_menu" aria-controls="main_menu" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="navbar-collapse justify-content-end fixed-height" id="main_menu">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="/home">
                                                Home
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/starter_zone">Starter Zone
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/earn">Earn WAXP
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/rewards">Rewards
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                    </ul>
                                    @guest
                                        @if (Route::has('login'))
                                            <a class="mybtn1" href="{{ route('login') }}">Register / Login</a>
                                            {{-- <a href="#" class="mybtn1" data-toggle="modal" data-target="#signin">Register / Login</a> --}}
                                        @endif
                                    @else
                                        <div class="flex items-center justify-between w-[350px]">
                                            <div class="flex flex-column">
                                                {{-- <a href="{{ route('logout') }}">
                                                    <img src="{{ asset('assets/images/man_icon.png') }}" alt="man_icon"
                                                        width="40px">
                                                </a> --}}
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                    <img src="{{ asset('assets/images/man_icon.png') }}" alt="man_icon"
                                                    width="40px">
                                                </a>
                                                <a href="/user/{{ Auth::user()->user_id }}"
                                                    class="text-[14px]">Settings</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            <div class="w-[70%] text-[12px]">
                                                <p class="text-[14px]">Welcome, XXX</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="text-[14px]">Your Balance:</p>
                                                    <div>
                                                        <p class="text-[14px]">100,123.00$WAXP</p>
                                                        <p class="text-[14px]">100,123.00$KLEE</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <img src="{{ asset('assets/images/bell_icon.png') }}" alt="bel_icon"
                                                        width="30px">
                                                </a>
                                            </div>
                                            <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                </a>
                                                
                                                <div class="" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div> -->
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="py-4" style="margin-top:82px;">
        @yield('content')
    </main>

</body>

</html>
