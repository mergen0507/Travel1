<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;

Route::get('/', [PlaceController::class, 'index']);
Route::get('/places/{id}', [PlaceController::class, 'show']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/places/{id}/like', [PlaceController::class, 'like']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::post('/review', [ReviewController::class, 'store']);
Route::post('/booking', [BookingController::class, 'store']);
