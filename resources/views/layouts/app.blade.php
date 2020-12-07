<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Akili | Psychoterapia Aleksandra Magda') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <div class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top nav-transparent" id="nav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item px-2 active">
                        <a class="nav-link" href="{{ url('/') }}">{{ __("Strona główna") }} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('o-mnie') }}">O mnie</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('wspolpraca') }}">Współpraca</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ url('/') }}/#kontakt">{{ __("Kontakt") }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div id="app">

    @yield('content')

    <footer class="text-muted mt-5 pt-5">
        <div class="container">
            <p class="float-right">
                <a href="#">Wróć na górę</a>
            </p>
            <p>&copy; Psychoterapia Aleksandra Magda | <a
                    href="mailto:{{ config('mail.contact') }}">{{ config('mail.contact') }}</a></p>
            <p>Wykonanie: <a href="https://gackowski.edu.pl" target="_blank">Szymon Gackowski</a></p>
        </div>
    </footer>
</div>
</body>
</html>
