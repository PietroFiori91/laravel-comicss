<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    $comics = Config::get('comics');
    return View::make('comics.index', compact('comics'));
});
