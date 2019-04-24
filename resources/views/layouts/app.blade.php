<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- <div id="app"> --}}
        <main>
            <div class="full-body">
                {{-- header --}}
                <div class="header">
                    @include('layouts.header')
                </div>

                {{-- main-body --}}
                <div class="container mt-3">
                    <div class="content">
                        @include('inc.messages')
                        @yield('content')
                    </div>
                </div>

                {{-- footer --}}
                <div class="footer">
                    @include('layouts.footer')
                </div>
            </div>
        </main>
    {{-- </div> --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
