<?php

use Illuminate\Support\Facades\Route;

Route::get('/formation', function () {
    return view('formation\\formation');
})->name('formation_window');