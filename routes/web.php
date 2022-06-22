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
Route::resource('valuations', ValuationReportController::class);
Route::resource('rates', LandRateController::class);
Route::resource('stamps', StampDutyController::class);


include_once "extraWeb.php";
