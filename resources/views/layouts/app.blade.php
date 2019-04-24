<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'Erycoking') }}</title>
</head>
<body>
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
