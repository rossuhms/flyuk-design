<?php

Route::view('/', 'homepage')->name('home');
Route::view('/flight/search/results', 'pages.flight_search.results')->name('flight.search.results');

Route::view('/dispatch/1', 'pages.flight_dispatch.index')->name('flight.dispatch.overview');
Route::view('/dispatch/1/departure', 'pages.flight_dispatch.departure')->name('flight.dispatch.departure');
Route::view('/dispatch/1/aircraft', 'pages.flight_dispatch.aircraft')->name('flight.dispatch.aircraft');
