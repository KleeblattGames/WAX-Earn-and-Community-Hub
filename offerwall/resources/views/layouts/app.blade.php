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
            <section class="earn-list">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 ETH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>

    <main class="" style="margin-top:82px;">
        @yield('content')
    </main>

    <!-- Footer Area Start -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            About
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Latest Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Authenticity Guarantee
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Customer Reviews
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Privacy Policy

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            My Account
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Manage Your Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> How to Deposit
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> How to Withdraw
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Account Varification
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Safety & Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Membership Level

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            help center
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Help centre
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Quick Start Guide
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Tutorials
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Borrow
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Lend

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            Legal Info
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Risk Warnings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Privacy Notice
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Become Affiliate
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Complaints Policy

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-area">
                            <p>Copyright © 2023.All Rights Reserved By <a href="#">KleeblattGAMES</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="copright-area-links">
                            <li>
                                <a href="#">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Gamble</a>
                            </li>
                            <li>
                                <a href="#">Aware</a>
                            </li>
                            <li>
                                <a href="#">Help Cente</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

</body>

</html>
