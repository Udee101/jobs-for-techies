<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/listings', [ListingController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/listings/create', [ListingController::class, 'store']);
  Route::get('/users', [UserController::class, 'index']);
  Route::get('/user/{id}/{listings}', [ListingController::class, 'index']);
});
