<?php

use App\Http\Controllers\Mock\DateBusinessDayController;
use App\Http\Controllers\Mock\OrderFutureController;
use App\Http\Controllers\Mock\OrderListFutureController;
use App\Http\Controllers\Mock\OrderListOptionController;
use App\Http\Controllers\Mock\OrderOptionController;
use App\Http\Controllers\Mock\QuoteFutureController;
use App\Http\Controllers\Mock\QuoteIndexController;
use App\Http\Controllers\Mock\QuoteOptionController;
use App\Http\Controllers\Mock\SymbolFutureController;
use App\Http\Controllers\Mock\SymbolOptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/{path?}', function () {
//     return view('app');
// })->where('path', '^(?!api).*$');

// Route::get('/symbol/future', SymbolFutureController::class);
Route::get('/symbol/option', SymbolOptionController::class);

Route::get('/date/businessday', DateBusinessDayController::class);
Route::get('/date/derivbusinessday', DateBusinessDayController::class);

Route::get('/quotes/future', QuoteFutureController::class);
Route::get('/quotes/option', QuoteOptionController::class);
Route::get('/quotes/index', QuoteIndexController::class);

//Fake order
Route::get('/order/future', OrderFutureController::class);
Route::get('/order/option', OrderOptionController::class);

Route::get('/order-list/future', OrderListFutureController::class);
Route::get('/order-list/option', OrderListOptionController::class);

