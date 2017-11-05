<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title') Fly UK Virtual Airways</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-normal bg-white">
    <div id="app">
        @include('layouts.components.header')
        @include('layouts.components.nav')
        @yield('homepage-additional')
        @yield('main-content')
        @include('layouts.components.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
