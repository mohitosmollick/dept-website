<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="{{asset('/view/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/view/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{asset('/view/assets/css/style.css')}}">


</head>
<body>
    <div class="page-loader">
        <div class="page-loader-body"><span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
        </div>
    </div>
    <div class="page text-center">
        <header class="page-head">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar theme-background rd-navbar-center" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="220px" data-xl-stick-up-offset="220px" data-xxl-stick-up-offset="220px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel"><button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <h4 class="panel-title rd-mb-2">ANFT-IU,Kushtia</h4><button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                            <div class="rd-navbar-top-panel">
                                <div class="shell">
                                    <div class="range range-10 range-md-center range-md-middle range-lg-around">
                                        <div class="cell-md-3">
                                            <div class="unit unit-horizontal unit-top unit-spacing-xs">
                                                <div class="unit-left"><span class="icon theme-icon mdi mdi-phone text-middle"></span></div>
                                                <div class="unit-body"><a class="reveal-block" href="tel:#">1-800-1234-567,</a><a href="tel:#">1-800-6547-321</a></div>
                                            </div>
                                        </div>
                                        <div class="cell-md-3 text-center">
                                            <div class="rd-navbar-brand">
                                                <a class="reveal-inline-block" href="index.html"><img src="{{asset('/view/assets/images/logo-default-2-144x122-1.png')}}" alt="" width="191" height="80"></a>
                                            </div>
                                        </div>
                                        <div class="cell-md-3">
                                            <div class="inset-md-left-50">
                                                <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                                                    <div class="unit-left"><span class="icon theme-icon mdi mdi-map-marker text-middle"></span></div>
                                                    <div class="unit-body"><a href="#">Shaikhpara</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap clearfix">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <div class="rd-navbar-mobile-header-wrap">
                                        <div class="rd-navbar-mobile-brand">
                                            <a href="index.html"><img src="assets/images/logo-default-2-144x122-1.png" alt="" srcset="assets/images/logo-300x222.png 2x"></a>
                                        </div>
                                    </div>
                                    <ul class="rd-navbar-nav">
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
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="contacts.html">Contacts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="course-grid.html">Course</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="course-grid.html">Course Page</a></li>
                                                <li><a href="course-details.html">Course Details Page</a></li>
                                            </ul>
                                        </li>
                                            <li><a href="events.html">Events</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="event-page.html">Event Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="team.html">Lecturer</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="privacy.html">Terms of Use</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="team-member-profile.html">Team Member Profile</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="grid-news.html">Grid News</a></li>
                                                <li><a href="news-post-page.html">News Post Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="create-post.html">Post</a></li>
                                        <li><a href="search-results.html">Batch</a></li>

                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                                    <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="" method="GET">
                                            <div class="form-group"><label class="form-label" for="rd-navbar-mobile-search-form-control">Search...</label><input class="rd-navbar-search-form-control form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-control"
                                                    type="text" name="s" autocomplete="off"></div><button class="icon fa-search rd-navbar-search-button" type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                                <form class="rd-navbar-search-form search-form-icon-right rd-search" action="" data-search-live="rd-search-results-live" method="GET">
                                    <div class="form-group"><label class="form-label" for="rd-navbar-search-form-control">Search</label><input class="rd-navbar-search-form-control form-control form-control-gray-lightest" id="rd-navbar-search-form-control" type="text" name="s"
                                            autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

            @yield('content')


        <footer class="section page-footer">
            <div class="theme-background bg-cover bg-default">
                <div class="shell-wide">
                    <div class="hr bg-gray-light"></div>
                </div>
                <div class="section-60">
                    <div class="shell">
                        <div class="range range-50 range-lg-justify range-xs-center">
                            <div class="cell-md-3 cell-lg-3">
                                <a class="reveal-inline-block" href="index.html"><img src="{{asset('/view/assets/images/logo-default-2-144x122-1.png')}}" alt="" srcset="assets/images/logo-default-2-144x122-1.png"></a>
                                <div class="offset-top-30 text-center">
                                    <ul class="list-inline list-inline-xs list-inline-madison">
                                        <li>
                                            <a class="icon theme-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon theme-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon theme-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon theme-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
                                <h6 class="text-bold">Contact us</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30">
                                    <ul class="list-unstyled contact-info list">
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon theme-icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a class="text-dark" href="tel:#">1-800-1234-567,</a><a class="reveal-block reveal-md-inline-block text-dark" href="tel:#">1-800-6547-321</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon theme-icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body text-left"><a class="text-dark" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon theme-icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left">
                                <h6 class="text-bold">Newsletter</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30 text-left">
                                    <p>Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
                                </div>
                                <div class="offset-top-10">
                                    <form class="rd-mailform form-subscribe" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm"><label class="form-label" for="form-email">Your e-mail</label><input class="form-control" id="form-email" type="email" name="email" ><span class="input-group-btn"><button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span></div>
                                        </div>
                                        <div class="form-output"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-5 bg-madison context-dark theme-background">
                    <div class="shell text-md-left">
                        <p class="text-light">© <span class="copyright-year">2021</span> All Rights Reserved Terms of Use and <a href="privacy.html">Privacy Policy.</a><span> Design&nbsp;by Mohitos Mollick Dip</span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('/view/assets/js/core.min.js')}}"></script>
    <script src="{{asset('/view/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/view/assets/js/script.js')}}"></script>
</body>
</html>
{{-- <div id="app">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
