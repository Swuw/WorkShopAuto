<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main/main.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('cabinet') }}">
                                    {{ __('Cabinet') }}
                                </a>
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


{{--        <section class="footer">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6 col-12">--}}
{{--                        <div class="footer-left"><a href=""> <img src="./../../img/logo.svg" alt=""/></a>--}}
{{--                            <div class="footer-left-contacts"> <a class="footer-left-contacts-item" href="mailto:willie.jennings@example.com"> <img src="./../../img/mail-sharp 1.svg" alt=""/><span>willie.jennings@example.com</span></a><a class="footer-left-contacts-item" href="tel:+79038403153"> <img src="./../../img/call-sharp (1) 1.svg" alt=""/><span>+7 (903) 840-31-53</span></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-12">--}}
{{--                        <div class="footer-menu"><a href="">About Us</a><a href="">Services</a><a href="">News & Updates</a><a href="">Careers</a><a href="">Contact Us</a></div>--}}
{{--                        <div class="footer-menu"><a href="privacy-policy.html">Privacy Policy</a><a href="terms-conditions.html">Terms & Conditions</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="footer-rights">Luxwill  LTD © 2021 All rights reserved</div>--}}
{{--        </section>--}}


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
