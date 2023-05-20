<?php

use App\Http\Controllers\API\v1\Auth\AuthController;
use App\Http\Controllers\API\v1\ListingController;
use App\Http\Controllers\API\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{listing}', [ListingController::class, 'showListing']);


Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::post('/listings/create', [ListingController::class, 'store']);
  Route::get('/users', [UserController::class, 'index']);
  Route::get('/users/{user}', [UserController::class, 'show']);
  Route::post('/users/{user}', [UserController::class, 'update']);
  Route::get('/user/listings', [ListingController::class, 'getUserListings']);
  Route::put('/user/listings/{listing}', [ListingController::class, 'update']);
  Route::delete('/user/listings/{listing}', [ListingController::class, 'destroy']);
});
