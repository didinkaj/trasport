<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="main-page-login" id="app">
    <section class="grid-container fluid grid-margin-x grid-padding-x header-nav">
        <div class="grid-container">
        <div class="title-bar " data-responsive-toggle="mainNavigation" data-hide-for="medium">
            <div class="title-bar-left">
                <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
                <div class="title-bar-title">Menu</div>
            </div>
            <div class="title-bar-right">
                <a href="{{route('home')}}"> TMS</a>
            </div>
        </div>
        <div class="top-bar" id="mainNavigation">
            <div class="top-bar-left">
                <ul class="menu vertical medium-horizontal">
                    <li class="menu-text hide-for-small-only">
                        <a href="{{route('home')}}"> {{ config('app.name', 'Laravel') }}</a>
                    </li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <ul class="dropdown menu" data-dropdown-menu>
                            <li>
                                <a href="#">{{ Auth::user()->name }}</a>
                                <ul class="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    </section>

    <div class="grid-container auth-container">
        <div class="row align-middle  login-content">

            <div class="form-container hide-for-small-only medium-6 small-centered columns">
                <div class="row align-middle home-logo ">
                    <div class="columns">
                        <img src="{{asset('images/watermark.png')}}">

                    </div>
                </div>
            </div>


            @yield('content')
        </div>
        <div class="row">
            <div class="column">

            </div>
        </div>
    </div>



</div>
<footer class="grid-container fluid footer-section ">
    <section class="grid-container ">
        <div class="medium-12">
            <p class="text-center footer-text">Johnson Didinya &copy  2018</p>
        </div>
    </section>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
