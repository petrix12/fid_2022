<?php

use Illuminate\Support\Facades\Route;

Route::get('/documentation', function () {
    return view('documentation\documentation');
})->name("documentation_window");