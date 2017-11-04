<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title') Fly UK Virtual Airways</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/js/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/js/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/yamm/yamm.css">
</head>
<body>
    <div id="app">
        @include('layouts.components.header')
        @include('layouts.components.nav')
        @yield('main-content')
        @include('layouts.components.footer.index')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="/js/owl-carousel/dist/owl.carousel.min.js"></script>

</body>
</html>
