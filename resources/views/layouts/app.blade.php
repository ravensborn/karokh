<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karokh Wi-Fi LLC: Your smart solution for managing hotspots</title>

    <meta name="description" content="Karokh Wi-Fi LLC: Your smart solution for managing hotspots.">
    <meta property="og:site_name" content="Karokh Wi-Fi LLC: Karokh.co - Your smart solution for managing hotspots"/>
    <meta property="og:title" content="Karokh Wi-Fi LLC: Karokh.co - Your smart solution for managing hotspots"/>
    <meta property="og:description" content="Karokh Wi-Fi LLC: Your smart solution for managing hotspots."/>
    <meta property="og:image" content="{{ asset('img/karokh-logo-dark.png') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://karokh.co"/>

    <meta name="google-site-verification" content="tJfL36-sobyXa4Ww3eLVVGf_xXriKY6h4r7jpFXZvsE"/>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favico/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favico/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favico/site.webmanifest') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-theme.css') }}">

    @if(request()->is('/'))
        <style>
            /*.navbar-absolute-top {*/
            /*    position: absolute;*/
            /*    left: 0;*/
            /*    right: 0;*/
            /*}*/
        </style>
    @endif
</head>
<body>

<nav class="navbar custom-red">
    <div class="container">
        <div class="d-flex justify-content-between w-100">
            <div class="d-flex justify-content-center align-items-center gap-4">
                {{--                <div>--}}
                {{--                    <a class="link text-white text-decoration-none" href="">KU</a>--}}
                {{--                </div>--}}
                {{--                <div>--}}
                {{--                    <a class="link text-white text-decoration-none" href="">EN</a>--}}
                {{--                </div>--}}
                {{--                <div>--}}
                {{--                    <a class="link text-white text-decoration-none" href="">AR</a>--}}
                {{--                </div>--}}
            </div>
            <div>
                <a class="link text-white text-decoration-none" href="{{ route('login') }}">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                    Sign-in
                </a>
            </div>
        </div>
    </div>
</nav>

<nav
    class="navbar navbar-expand-sm @if(request()->routeIs('home')) bg-black navbar-dark @else  @endif flex-sm-nowrap flex-wrap">
    <div class="container">
        <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar5">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand flex-grow-1">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h1>Karokh WiFi LLC</h1>
            </a>
        </span>
        <div class="navbar-collapse collapse flex-grow-1 justify-content-center" id="navbar5">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('home')) active @endif"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('tutorials')) active @endif"
                       href="{{ route('tutorials') }}">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('pricing')) active @endif" href="{{ route('pricing') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('resources')) active @endif"
                       href="{{ route('resources') }}">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('blog')) active @endif"
                       href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('gallery')) active @endif" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('contact-us')) active @endif"
                       href="{{ route('contact-us') }}">Contact Us</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

@yield('content')

<footer>

    <div class="container-fluid" style="background-color: #585A5E;">
        <div class="row">
            <div class="col-12 col-md-4 mb-5 mb-md-0 text-center">
                <p class="text-white mt-3" style="font-size: 25px; text-decoration: underline;">Platform</p>


                <a href="#" class="d-block text-decoration-none text-white underline mt-3" style="font-size: 25px;">Login</a>
                <a href="{{ route('contact-us') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Support</a>
            </div>

            <div class="col-12 col-md-4 mb-5 mb-md-0 d-flex justify-content-center align-items-center">
                <div>
                    <img style="width: 200px; height: auto;" src="{{ asset('img/karokh-logo.svg') }}" alt="Logo">
                    <h3 class="text-white">
                        Karokh WiFi LLC
                    </h3>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-5 mb-md-0 text-center">
                <p class="text-white mt-3" style="font-size: 25px; text-decoration: underline;">Resources</p>

                <a href="{{ route('tutorials') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Tutorial</a>
                <a href="{{ route('pricing') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Pricing</a>
                <a href="{{ route('resources') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Resources</a>
                <a href="{{ route('blog') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Blog</a>
                <a href="{{ route('gallery') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Gallery</a>
                <a href="{{ route('contact-us') }}" class="d-block text-decoration-none text-white underline mt-3"
                   style="font-size: 25px;">Contact US</a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <a href="">
                    <img class="me-5" src="{{ asset('img/footer-social-icons/youtube.png') }}" alt="social link">
                </a>
                <a href="">
                    <img class="me-5" src="{{ asset('img/footer-social-icons/instagram.png') }}" alt="social link">
                </a>
                <a href="">
                    <img class="me-5" src="{{ asset('img/footer-social-icons/facebook.png') }}" alt="social link">
                </a>
                <a href="">
                    <img class="me-5" src="{{ asset('img/footer-social-icons/whatsapp.png') }}" alt="social link">
                </a>
            </div>
        </div>
    </div>


    <div class="container-fluid custom-red mt-3">

        <div class="row" style="height: 50px;">
            <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="text-white">&copy; Copyright KarokhWifi LLC Company 2023, All right reserved</div>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <div class="me-5">
                    <a class="text-white" href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>
                </div>
                <div class="me-5">
                    <a class="text-white" href="{{ route('privacy-and-policy') }}">Privacy and Policy</a>
                </div>
                <div>
                    <a class="text-white" href="{{ route('user-data-deletion') }}">User Data Deletion</a>
                </div>
            </div>
        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
