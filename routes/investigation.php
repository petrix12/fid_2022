<?php

use Illuminate\Support\Facades\Route;

Route::get('/investigation', function () {
    return view('investigation\investigation');
})->name("investigation_window");