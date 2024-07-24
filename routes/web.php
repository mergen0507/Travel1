<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PlaceController::class, 'index'])->name('places.index');
Route::get('/places/{id}', [PlaceController::class, 'show'])->name('places.show');
Route::get('/places/create', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::post('/places/{id}/like', [PlaceController::class, 'like']);
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::post('/review', [ReviewController::class, 'store']);
Route::post('/booking', [BookingController::class, 'store']);
