<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('diffusion\diffusion');
})->name("diffusion_window");