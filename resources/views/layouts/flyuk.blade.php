<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title') Fly UK Virtual Airways</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script
      src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-3.min.js"
      data-apikey="8920ab1149f7ab7462937bb3115b7db4"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="font-sans font-normal text-grey-darkest bg-white">
    <div id="app">
        @include('layouts.components.header')
        @include('layouts.components.nav')
        @yield('homepage-additional')
        @yield('main-content')
        @include('layouts.components.footer')
    </div>
</body>
</html>
