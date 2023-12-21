<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomePageController::class, 'home'])->name('home');
Route::get('/detail/{isbn:isbn}/{judul:judul}', [HomePageController::class, 'detail'])->name('detail');