<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LandRateController;
use App\Http\Controllers\StampDutyController;
use App\Http\Controllers\ValuationReportController;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('valuationReports', ValuationReportController::class);
Route::put('valuation/approve/{id}',[ValuationReportController::class,'approvevaluation'])->name('approve.valuation');

Route::resource('landRates', LandRateController::class);
Route::put('landrate/approve/{id}',[LandRateController::class,'approvelandrate'])->name('approveland.rate');
Route::resource('stampDuties', StampDutyController::class);



include_once "extraWeb.php";
