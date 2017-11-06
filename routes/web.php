<?php

Route::view('/', 'homepage')->name('home');
Route::view('/flight/search/results', 'pages.flight_search.results')->name('flight.search.results');
