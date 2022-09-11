<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/', static fn() => view('admin.home'))->name('admin.home');

});

Route::get('/', static fn() => view('public.home'))->name('public.home');

Route::get('/about', static fn() => view('public.about'))->name('public.about');

