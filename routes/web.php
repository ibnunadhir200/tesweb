<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [IndexController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('Profile');
// });
