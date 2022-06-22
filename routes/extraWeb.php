<?php

use App\Http\Controllers\LandController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('lands',LandController::class);
Route::resource('users',UserController::class);
