<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::view('/', 'dashboard')->name('dashboard');

Route::resource('categories', CategoryController::class);
