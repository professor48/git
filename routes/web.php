<?php

use Illuminate\Support\Facades\Route;
use Native\Laravel\Facades\AutoUpdater;

Route::get('/', function () {

    return view('welcome');
});
