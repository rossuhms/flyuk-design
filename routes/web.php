<?php

Route::get('/', function () {
    return view('homepage');
});

Route::view('/flight/search/results', 'pages.flight_search.results');
