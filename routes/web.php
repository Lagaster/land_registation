<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandRateController;
use App\Http\Controllers\StampDutyController;
use App\Http\Controllers\ValuationReportController;
use App\Http\Controllers\BindController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\LandUserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.welcome');
})->name('landing-page');

Route::get('/about-us', function () {
    return view('front.about');
})->name('about-page');

Route::get('/contact-us', function () {
    return view('front.contact-us');
})->name('contact-us-page');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('valuationReports', ValuationReportController::class);
Route::put('valuation/approve/{id}',[ValuationReportController::class,'approvevaluation'])->name('approve.valuation');

Route::resource('landRates', LandRateController::class);
Route::put('landrate/approve/{id}',[LandRateController::class,'approvelandrate'])->name('approveland.rate');

Route::resource('stampDuties', StampDutyController::class);
Route::put('stamp/approve/{id}',[StampDutyController::class,'approvestamp'])->name('approve.stamp');


Route::middleware('auth')->group(function () {
    Route::get('lands/transfer/confirm', [LandUserController::class, 'showConfirmLandTransfer'])->name('confirm.land.transfer.index');
    Route::post('lands/transfer/confirm/{landUser}', [LandUserController::class, 'confirmLandTransfer'])->name('confirm.land.transfer.update');
    Route::get('lands/owned',[LandController::class,'myLands'])->name('lands.mylands');
    Route::resource('lands', LandController::class);
    Route::resource('users', UserController::class);
    Route::resource('payments', PaymentController::class)->except("create", "edit");
    Route::post('bind/seller/action/{bind}', [BindController::class, 'bindAction'])->name('binds.action');
    Route::get('binds/buyer', [BindController::class, 'buyerBinds'])->name('binds.buyer');
    Route::get('binds/buyer/payments/{bind}', [PaymentController::class, 'index'])->name('binds.buyer.payments');
    Route::get('binds/seller', [BindController::class, 'sellerBinds'])->name('binds.seller');
    Route::resource('binds', BindController::class)->except('index');
});
