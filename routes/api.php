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

Route::prefix('product')->group(function () {
    Route::get('/get', [ProductController::class, 'getAll']);
    Route::get('/find/{id}', [ProductController::class, 'find'])->where('id', '[0-9]+');
    Route::post('/add-update', [ProductController::class, 'find']);
    Route::post('/delete/{id}', [ProductController::class, 'find'])->where('id', '[0-9]+');
});
