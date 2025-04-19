<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/input-pesanan', function () {
    return view('input-pesanan');
})->name('input.pesanan');
