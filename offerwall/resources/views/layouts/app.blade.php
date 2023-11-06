<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KleeblattGames | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ul {
            list-style: none;
        }

        .user-menu-wrap {
            position: relative;
            width: 36px;
            margin: 50px auto;
        }

        .menu-container {
            visibility: hidden;
            opacity: 0;

            &.active {
                visibility: visible;
                opacity: 1;
                transition: all .2s ease-in-out;
            }
        }

        .user-menu {
            position: absolute;
            right: -22px;
            background-color: #FFFFFF;
            width: 256px;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 20px;

            .profile-highlight {
                display: flex;
                border-bottom: 1px solid $#E0E0E0;
                padding: 12px 16px;
                margin-bottom: 6px;

                img {
                    width: 48px;
                    height: 48px;
                    border-radius: 25px;
                    object-fit: cover;
                }

                .details {
                    display: flex;
                    flex-direction: column;
                    margin: auto 12px;

                    #profile-name {
                        font-weight: 600;
                        font-size: 16px;

                    }

                    #profile-footer {
                        font-weight: 300;
                        font-size: 14px;
                        margin-top: 4px;
                    }
                }

            }

            .footer {
                border-top: 1px solid $#E0E0E0;
                padding-top: 6px;
                margin-top: 6px;

                .user-menu-link {
                    font-size: 13px;
                }
            }

            .user-menu-link {
                display: flex;
                text-decoration: none;
                color: #333333;
                font-weight: 400;
                font-size: 14px;
                padding: 12px 16px;

                div {
                    margin: auto 10px;
                }

                &:hover {
                    background-color: #F5F5F5;
                    color: #333333;
                }
            }

            &:before {
                position: absolute;
                top: -16px;
                left: 120px;
                display: inline-block;
                content: "";
                border: 8px solid transparent;
                border-bottom-color: $#E0E0E0;
            }

            &:after {
                position: absolute;
                top: -14px;
                left: 210px;
                display: inline-block;
                content: "";
                border: 7px solid transparent;
                border-bottom-color: #FFFFFF;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="mainmenu-area">
            <div class="container w-full flex items-center h-[82px]">
                <div class="row w-full mr-0 ml-0">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid p-0 flex items-center flex-nowrap gap-2 sm gap-0">
                                <a class="navbar-brand" href="/home">
                                    <!-- <img src="{{ asset('assets/images/logo.png') }}" alt=""> -->
                                    <h4>KleeblattGames</h4>
                                </a>
                                <div class="navbar-collapse justify-content-end fixed-height d-flex gap-3 sm:gap-[15px]" id="main_menu">
                                    @guest
                                    @if (Route::has('login'))
                                    <a class="mybtnReg" href="{{ route('login') }}">PRE-REGISTER</a>
                                    {{-- <a href="#" class="mybtnReg" data-toggle="modal" data-target="#signin">PRE-REGISTER</a> --}}
                                    @endif
                                    @else
                                    <button id="burger-button" class="navbar-toggler" type="button">
                                        <span class="navbar-toggler-icon"></span>
                                        <div id="verticalMenu" class="vertical-menu">
                                            <ul class="navbar-nav navbar_burger">
                                                <li class="nav-item dropdown text-start">
                                                    <a class="nav-link {{ request()->segment(1) == 'home' || request()->segment(1) == 'profile' ? 'active' : '' }}" href="/home">
                                                        Home
                                                        <div class="mr-hover-effect"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item text-start">
                                                    <a class="nav-link {{ request()->segment(1) == 'starter_zone' ? 'active' : '' }}" href="/starter_zone">Community
                                                        <div class="mr-hover-effect"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item text-start">
                                                    <a class="nav-link {{ request()->segment(1) == 'earn' ? 'active' : '' }}" href="/earn">Earn Crypto
                                                        <div class="mr-hover-effect"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item text-start">
                                                    <a class="nav-link {{ request()->segment(1) == 'rewards' ? 'active' : '' }}" href="/rewards">Rewards
                                                        <div class="mr-hover-effect"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="d-flex pt-3 gap-4">
                                                <div class="flex w-full justify-between">
                                                    <p class="text-[14px] text-white">100,123.00$WAXP</p>
                                                    <p class="text-[14px] text-white">100,123.00$KLEE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                    <ul class="navbar-nav m-auto navbar_big">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link {{ request()->segment(1) == 'home' || request()->segment(1) == 'profile' ? 'active' : '' }}" href="/home">
                                                Home
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->segment(1) == 'starter_zone' ? 'active' : '' }}" href="/starter_zone">Community
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->segment(1) == 'earn' ? 'active' : '' }}" href="/earn">Earn Crypto
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->segment(1) == 'rewards' ? 'active' : '' }}" href="/rewards">Rewards
                                                <div class="mr-hover-effect"></div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex items-center justify-between w-[350px] h-[82px] detail_cont">
                                        <div class="w-[70%] text-[12px] navbar_big">
                                            <!-- <p class="text-[14px]">Welcome, {{ Auth::user()->name }}</p> -->
                                            <div class="d-flex justify-content-end">
                                                <!-- <p class="text-[14px]">Your Balance:</p> -->
                                                <div>
                                                    <p class="text-[14px] text-white">100,123.00$WAXP</p>
                                                    <p class="text-[14px] text-white">100,123.00$KLEE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="">
                                                <img class="nothification" src="{{ asset('assets/images/nothification.png') }}" alt="nothification" width="23" height="23">
                                            </a>
                                        </div>
                                        <div class="flex flex-column">
                                            {{-- <a href="{{ route('logout') }}">
                                            <img src="{{ asset('assets/images/man_icon.png') }}" alt="man_icon" width="40">
                                            </a> --}}
                                            <div class="user-menu-wrap" id="profile_popup">
                                                <div class="d-flex align-items-center gap-2 w-[100px]">
                                                    <a class="mini-photo-wrapper" href="#"><img class="mini-photo" src="{{ asset('assets/images/man_icon.png') }}" width="42" height="42" /></a>
                                                    <img src="{{ asset('assets/images/arrow_down.png') }}" alt="profile-img" width=10 height=10>
                                                </div>
                                                <div class="menu-container">
                                                    <ul class="user-menu">
                                                        <div class="profile-highlight items-center">
                                                            <img src="{{ asset('assets/images/man_icon.png') }}" alt="profile-img" width=36 height=36>
                                                            <div class="details px-[15px]">
                                                                <div id="profile-name">{{ Auth::user()->name }}</div>
                                                            </div>
                                                        </div>
                                                        <li class="user-menu__item">
                                                            <a class="user-menu-link" href="/profile">
                                                                <div>Profile</div>
                                                            </a>
                                                        </li>
                                                        <li class="user-menu__item">
                                                        <li class="user-menu__item"><a class="user-menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();" style="color: #F44336;">Logout</a></li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
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

    <main>
        @yield('content')
    </main>

    <!-- Footer Area Start -->
    <footer class="footer" id="footer">
        <div class="footer_header container">
            <h2>WAX Earn & Community Hub</h2>
        </div>
        <div class="container pt-[20px]">
            <div class="row footer_links">
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
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
                        </ul>
                    </div>
                </div>
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
                        <ul class="link-list">
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
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
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
                        </ul>
                    </div>
                </div>
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
                        <ul class="link-list">
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
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
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
                        </ul>
                    </div>
                </div>
                <div class="col-xs col-6 col-lg-4 col-res-xl">
                    <div class="footer-widget info-link-widget">
                        <ul class="link-list">
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
            </div>
        </div>
        <div class="copy-bg">
            <div class="container">
                <div class="row under_footer">
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Risk Warnings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Privacy Notice
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Security
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Terms of Service
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Become Affiliate
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs col-6 col-lg-4 col-res-xl">
                        <div class="footer-widget info-link-widget">
                            <ul class="link-list">
                                <li>
                                    <a href="#">
                                        Complaints Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <script>
        const profilePopup = document.querySelector('#profile_popup')
        profilePopup.addEventListener('click', function() {
            document.querySelector('.menu-container').classList.toggle('active');
        });

        const burgerButton = document.getElementById('burger-button');
        const verticalMenu = document.getElementById('verticalMenu');

        burgerButton.addEventListener('click', () => {
            verticalMenu.style.display = verticalMenu.style.display === 'block' ? 'none' : 'block';
        })

        function onClickOutside(ref, handler, mouseEvent = "mousedown") {
            function eventListener(event) {
                const el = ref;
                if (!el || el.contains(event.target)) {
                    return;
                }

                handler(event);
            }
            document.addEventListener(mouseEvent, eventListener);

            return function cleanup() {
                document.removeEventListener(mouseEvent, eventListener);
            };
        }
        const burgerBtn = document.getElementById('burger-button');

        onClickOutside(burgerButton, () => verticalMenu.style.display = 'none', 'click')
        onClickOutside(profilePopup, () => document.querySelector('.menu-container').classList.remove('active'), 'click')
    </script>

</body>

</html>