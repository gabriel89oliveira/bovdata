<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * Get basic information for all
 * listed companies
 * 
 */
Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);

/**
 * Get basic information for a
 * given ticker
 * 
 */
Route::get('/{ticker}', [\App\Http\Controllers\CompanyController::class, 'show']);

/**
 * Get all prices value for a
 * given ticker
 * 
 */
Route::get('/{ticker}/price', [\App\Http\Controllers\HistoricPriceController::class, 'show']);

/**
 * Get all income statements for a
 * given company and account
 * 
 */
Route::get('/{ticker}/income/{cd_conta}', [\App\Http\Controllers\StatementController::class, 'show']);