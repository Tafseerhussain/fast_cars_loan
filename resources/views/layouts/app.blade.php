<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fast Cars Loan</title>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('component-css')
    @livewireStyles
    @yield('custom-css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm main-theme-header">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="">
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
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-page') }}">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    How it Works
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('how-title-loan-works') }}">How Title Loan Works</a></li>
                                    <li><a class="dropdown-item" href="{{ route('how-personal-loan-works') }}">How Personal Loan Work</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Title Loan
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('title-loan') }}">Car Title Loans</a></li>
                                    <li><a class="dropdown-item" href="#">Car Title Pawns</a></li>
                                    <li><a class="dropdown-item" href="#">Motorcycle Title Loans</a></li>
                                    <li><a class="dropdown-item" href="#">Motorcycle Title Pawns</a></li>
                                    <li><a class="dropdown-item" href="#">RV Title Loans</a></li>
                                    <li><a class="dropdown-item" href="#">Personal Loans</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('advantages') }}">Advantages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                            </li>
                            
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            
                            <li class="nav-item account-btn">
                                <a class="nav-link btn" href="{{ route('login') }}">
                                    <i class="fa-regular fa-circle-user"></i>
                                    <span>Account</span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                            Dashboard
                                        </a>
                                    @endif
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

        <main>
            @yield('content')
        </main>

        <footer>
            <a href="#" class="go-back-to-top">
                <img src="{{ asset('img/home/arrow-up.svg') }}" alt="up-arrow">
            </a>
            <div class="container">
                <div class="row g-md-5">
                    <div class="col-md-4">
                        <div class="footer-col-1">
                            <a href="/">
                                <img src="{{ asset('img/logo-white.svg') }}" alt="logo">
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Id harum vero soluta voluptate eaque, debitis atque animi iure aliquam in laudantium accusamus quas deleniti consectetur libero totam. Impedit, sit at.
                            </p>
                            <div class="social-links">
                                <a href="#"><img src="{{ asset('img/footer-icons/facebook.svg') }}" alt="facebook"></a>
                                <a href="#"><img src="{{ asset('img/footer-icons/pinterest.svg') }}" alt="p-interest"></a>
                                <a href="#"><img src="{{ asset('img/footer-icons/instagram.svg') }}" alt="instagram"></a>
                                <a href="#"><img src="{{ asset('img/footer-icons/linkedin.svg') }}" alt="linked-in"></a>
                                <a href="#"><img src="{{ asset('img/footer-icons/twitter.svg') }}" alt="twitter"></a>
                            </div>
                            <div class="email-link">
                                Email Us:
                                <a href="#">Contact@fastcarsmoney.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-col-2">
                            <h3 class="footer-heading">
                                Company
                            </h3>
                            <div class="row">
                                <div class="col-md">
                                    <div class="footer-links">
                                        <a href="/">Home</a>
                                        <a href="{{ route('about-page') }}">About Us</a>
                                        <a href="{{ route('how-title-loan-works') }}">How Title Loan Work</a>
                                        <a href="{{ route('how-personal-loan-works') }}">How Personal Loan Work</a>
                                        <a href="#">Locations</a>
                                        <a href="{{ route('faq') }}">FAQs</a>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="footer-links">
                                        <a href="{{ route('apply-form') }}">Apply Now</a>
                                        <a href="{{ route('blogs') }}">Blog</a>
                                        <a href="#">Careers</a>
                                        <a href="#">Contact Customer Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-col-3">
                            <h3 class="footer-heading">
                                Disclosures
                            </h3>
                            <div class="row">
                                <div class="col-md">
                                    <div class="footer-links">
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">Terms of Use</a>
                                        <a href="#">Accessibility Statement</a>
                                        <a href="#">External Opt-Out Policy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright">
                            © Copyright 2012–2022 FastCarsMoney®. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    @livewireScripts
    @stack('component-js')
    @yield('custom-js')
</body>
</html>
