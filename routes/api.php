<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\ProductController;
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

Route::get('/user/setup-intent', [CommandController::class, 'getSetupIntent']);

Route::prefix('product')->group(function () {
    Route::get('/get/{id}', [ProductController::class, 'getAll'])->where('id', '[0-9]+');
    Route::get('/find/{id}', [ProductController::class, 'find'])->where('id', '[0-9]+');
    Route::post('/add-update', [ProductController::class, 'addUpdate']);
    Route::post('/delete/{id}', [ProductController::class, 'delete'])->where('id', '[0-9]+');
});

Route::prefix('company')->group(function () {
    Route::get('/get', [CompanyController::class, 'getAll']);
    Route::get('/best', [CompanyController::class, 'getBest']);
    Route::get('find/user/{id}', [CompanyController::class, 'findByUser'])->where('id', '[0-9]+');
    Route::get('/find/{id}', [CompanyController::class, 'find'])->where('id', '[0-9]+');
    Route::post('/add-update', [CompanyController::class, 'addUpdate']);
    Route::post('/delete/{id}', [CompanyController::class, 'delete'])->where('id', '[0-9]+');
});

Route::prefix('delivery-man')->group(function () {
    Route::get('/get/{id-company}', [DeliveryManController::class, 'getAll'])->where('id-company', '[0-9]+');
    Route::get('/find/{id}', [DeliveryManController::class, 'find'])->where('id', '[0-9]+');
    Route::post('/update', [DeliveryManController::class, 'update']);
    Route::post('/delete/{id}', [DeliveryManController::class, 'delete'])->where('id', '[0-9]+');
});

Route::prefix('delivery')->group(function () {
    Route::get('/get', [DeliveryController::class, 'getAll']);
    Route::post('/update', [DeliveryController::class, 'update']);
    Route::post('/delete/{id}', [DeliveryController::class, 'delete'])->where('id', '[0-9]+');
});

Route::prefix('command')->group(function () {
    Route::get('/get/{id}', [CommandController::class, 'getAll'])->where('id', '[0-9]+'); //Liste des livraisons par livreur (id_delivery_man)
    Route::post('/take-command', [CommandController::class, 'command']);
    Route::post('/add', [CommandController::class, 'add']);
    Route::post('/delete/{id}', [CommandController::class, 'delete'])->where('id', '[0-9]+');
    Route::post('/{id}/paiement', [CommandController::class, 'paiement'])->where('id', '[0-9]+');
});

Route::post('/facture', [FacturesController::class, 'getFacture']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('logout', [AuthController::class, 'logout']);
