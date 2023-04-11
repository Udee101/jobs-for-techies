<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/listings', [ListingController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);
