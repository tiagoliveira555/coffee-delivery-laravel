<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});
