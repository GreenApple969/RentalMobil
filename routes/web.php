<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\CarController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/', [\App\Http\Controllers\frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('/services', [\App\Http\Controllers\frontend\ServiceController::class, 'index'])->name('services');
Route::get('/cars', [\App\Http\Controllers\frontend\CarController::class, 'index'])->name('car');
Route::get('/cars/{car:slug}', [\App\Http\Controllers\frontend\CarController::class, 'show'])->name('car.show');
Route::get('/contact', [\App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact');