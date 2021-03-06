<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title') Fly UK Virtual Airways</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-normal">
    <div id="app">
        @include('layouts.components.header')
        @include('layouts.components.nav')
        @yield('main-content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
