<?php

use App\Livewire\Checkout;
use App\Livewire\Home;
use App\Livewire\Success;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/success', Success::class)->name('success');
