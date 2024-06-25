<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset("logo.png") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("app.name", "Laravel") }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env("MAPS_API_KEY") }}&sensor=false&libraries=places"></script>
    <script type="text/javascript" src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <!-- Scripts -->
    @vite(["resources/sass/app.scss", "resources/js/app.js"])

    <style>
        .nav-admin .nav-link:hover {
            background-color: #729f89;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info nav-admin">
            <div class="container">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <img src="{{ asset("logo.jpg") }}" alt="Logo" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __("Toggle navigation") }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{--ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has("admin.login"))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route("login") }}">{{ __("Login") }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("admin.home") }}">{{ __("Dashboard") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("transaction.index") }}">{{ __("Transactions") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("custom.index") }}">{{ __("Custom") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("product.index") }}">{{ __("Products") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("category.index") }}">{{ __("Categories") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("province.index") }}">{{ __("Provinces") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("city.index") }}">{{ __("Cities") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("area.index") }}">{{ __("Areas") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("material.index") }}">{{ __("Materials") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("color.index") }}">{{ __("Colors") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route("admin.index") }}">{{ __("Manage Admin") }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset("user.svg") }}">&nbsp;&nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a
                                        class="dropdown-item"
                                        href="{{ route("logout") }}"
                                        onclick="
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                        "
                                    >
                                    <img src="{{ asset("logout.svg") }}" width="31" height="27">{{ __("Logout") }}
                                    </a>

                                    <form id="logout-form" action="{{ route("logout") }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>--}}
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield("content")
        </main>
</body>
</html>
