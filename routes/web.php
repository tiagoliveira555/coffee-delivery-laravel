<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});
