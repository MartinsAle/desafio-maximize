<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Simetre - Laboratório Veterinário') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-md navbar-light bg-green shadow-sm">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Simetra">
                </a>
            </div>
        </nav>

        @if (session()->has('success'))

            <div class="alert alert-success">
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    @foreach (session()->get('success') as $msg)
                        <li>{{ $msg }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer text-bg-dark text-center mt-auto">
            <div class="pt-5 pb-5">
                <p class="mb-1">&copy; {{ date('Y') }} Simetra - Laboratório Veterinário.</p>
                <p>Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</body>

</html>
