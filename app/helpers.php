<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function isActiveRoute($route, $output = "text-grey-darker font-bold")
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }
}
