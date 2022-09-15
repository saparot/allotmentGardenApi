<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static fn() => view('public.home'))->name('public.home');

Route::get('/about', static fn() => view('public.about'))->name('public.about');

Route::prefix('admin')->group(function () {
    Route::get('/', static fn() => view('admin.home'))->name('admin.home');

    Route::get('/plants/create', static fn() => view('admin.plants.create'))->name('admin.plants.create');

    Route::post('/plants/store', static fn() => view('admin.plants.store'))->name('admin.plants.store');
});
