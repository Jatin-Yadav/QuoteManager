<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Http\Controllers\QuoteController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/quote', [QuoteController::class,'postQuote']);
Route::get('/quotes', [QuoteController::class,'getQuote']);
Route::put('/quote/{id}',[QuoteController::class,'putQuote']);
Route::delete('/quote/{id}',[QuoteController::class,'deleteQuote']);
