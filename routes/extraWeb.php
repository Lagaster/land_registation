<?php

use App\Http\Controllers\BindController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\LandUserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('lands/transfer/confirm', [LandUserController::class, 'showConfirmLandTransfer'])->name('confirm.land.transfer.index');
    Route::post('lands/transfer/confirm/{landUser}', [LandUserController::class, 'confirmLandTransfer'])->name('confirm.land.transfer.update');

    Route::resource('lands', LandController::class);
    Route::resource('users', UserController::class);
    Route::resource('payments', PaymentController::class)->except("create", "edit");
    Route::post('bind/seller/action/{bind}', [BindController::class, 'bindAction'])->name('binds.action');
    Route::get('binds/buyer', [BindController::class, 'buyerBinds'])->name('binds.buyer');
    Route::get('binds/buyer/payments/{bind}', [PaymentController::class, 'index'])->name('binds.buyer.payments');
    Route::get('binds/seller', [BindController::class, 'sellerBinds'])->name('binds.seller');
    Route::resource('binds', BindController::class)->except('index');
});
