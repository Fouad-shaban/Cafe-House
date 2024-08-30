<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe House Template</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('css/font-awesome.min.css') }} rel="stylesheet">
    <link href={{ asset('css/templatemo-style.css') }} rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('img/favicon.ico') }} type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <div id="app">
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="tm-top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="tm-top-header-inner d-flex justify-content-center">
                            <div class="tm-logo-container">
                                <img src={{ asset('img/logo.png') }} alt="Logo" class="tm-site-logo">
                                <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
                            </div>
                            <div class="mobile-menu-icon">
                                <i class="fa fa-bars"></i>
                            </div>
                            <nav class="tm-nav">
                                <ul>
                                    <li><a href={{ route('welcome') }}
                                            class="aref-ruqaa-regular">{{ __('language.HOME') }}</a></li>
                                    <li><a href={{ route('todayspecial') }}
                                            class="aref-ruqaa-regular">{{ __('language.TODAYSPECIAL') }}</a></li>
                                    <li><a href={{ route('menu') }}
                                            class="aref-ruqaa-regular">{{ __('language.MENU') }}</a></li>
                                    <li><a href={{ route('contact') }}
                                            class="aref-ruqaa-regular">{{ __('language.CONTACT') }}</a></li>


                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="aref-ruqaa-regular" rel="alternate"
                                                hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach


                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item tm-nav ">
                                            <a class="nav-link  " href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item tm-nav">
                                                <a class="nav-link aref-ruqaa-regular"
                                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle aref-ruqaa-regular"
                                                href={{ route('home') }} role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item aref-ruqaa-regular" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('language.LOGOUT') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                            </div>
                            </li>
                        @endguest
                        </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div class="tm-black-bg">
            <div class="container">
                <div class="row margin-bottom-60">
                    <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
                        <h3 class="tm-footer-div-title">Main Menu</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Directory</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Our Services</a></li>
                        </ul>
                    </nav>
                    <div class="col-lg-5 col-md-5 tm-footer-div">
                        <h3 class="tm-footer-div-title">About Us</h3>
                        <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
                            enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                            nulla ut metus varius laoreet.</p>
                        <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                            faucibus.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 tm-footer-div">
                        <h3 class="tm-footer-div-title">Get Social</h3>
                        <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.
                        </p>
                        <div class="tm-social-icons-container">
                            <a href="#" class="tm-social-icon"><i class="fa-brands fa-facebook"></i></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa-brands fa-behance"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row tm-copyright">
                    <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2024 Your Cafe House</p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- JS -->
    <script type="text/javascript" src={{ asset('js/jquery-1.11.2.min.js') }}></script> <!-- jQuery -->
    <script type="text/javascript" src={{ asset('js/templatemo-script.js') }}></script> <!-- Templatemo Script -->
    <script>
        /* Google map
                ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(13.758468, 100.567481),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
                calculateCenter();
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(center);
            });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        }
        $(document).ready(function() {
            loadGoogleMap();
        });
    </script>

</body>

</html>
