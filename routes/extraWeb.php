<?php

use App\Http\Controllers\BindController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('lands',LandController::class);
Route::resource('users',UserController::class);
Route::resource('payments',PaymentController::class)->except("create","edit");
Route::resource('binds',BindController::class);
