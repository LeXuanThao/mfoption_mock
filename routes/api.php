<?php

use App\Http\Controllers\CreateSymbolController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\ListSymbolController;
use App\Http\Controllers\ListUnderlyerSymbolController;
use App\Http\Controllers\Mock\SymbolFutureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//-- User manage
// Route::get('/users');
// Route::get('/users', ListUserController::class);
// Route::post('/users', CreateUserController::class);
// Route::post('/users');

//-- Symbol manage
// Route::get('/symbols', ListSymbolController::class);
//Create symbols
//Update symbols


// Route::post('/symbols');

//Mocking API response as real server
// Route::get('')
// Route::get('/exchanges', ExchangeController::class);
// Route::get('/symbols', ListSymbolController::class);
// Route::get('/symbols/underlyers', ListUnderlyerSymbolController::class);
// Route::post('/symbols', CreateSymbolController::class);