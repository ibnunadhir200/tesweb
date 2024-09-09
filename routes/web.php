<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [IndexController::class, 'index'])->name('index');

Route::get('/profile',  [ProfileController::class, 'index'])->name('profile.index');
