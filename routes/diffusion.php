<?php

use Illuminate\Support\Facades\Route;

Route::get('/diffusion', function () {
    return view('diffusion\diffusion');
})->name("difussion_window");