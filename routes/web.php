<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\Frontend\ContactController;

Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('/services', [\App\Http\Controllers\Frontend\ServiceController::class, 'index'])->name('services');
Route::get('/cars', [\App\Http\Controllers\Frontend\CarController::class, 'index'])->name('car');
Route::get('/cars/{car:slug}', [\App\Http\Controllers\Frontend\CarController::class, 'show'])->name('car.show');
Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
