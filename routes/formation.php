<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formation\\formation');
})->name('formation_window');