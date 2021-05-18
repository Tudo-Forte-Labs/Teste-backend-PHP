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

Route::group(['prefix' => 'v1'], function() {
    Route::post('register', [\App\Http\Controllers\Api\RegisterController::class, 'register']);
    Route::post('authentication', [\App\Http\Controllers\Api\AuthController::class, 'authentication']);
    Route::group(['prefix' => 'products'], function() {
        Route::get('findAll', [\App\Http\Controllers\Api\ProductController::class, 'findAll']);
        Route::get('findById/{id}', [\App\Http\Controllers\Api\ProductController::class, 'findById']);
    });
    Route::group(['middleware' => 'jwt.verify'], function(){
        Route::get('me', [\App\Http\Controllers\Api\AuthController::class, 'me']);
        Route::group(['prefix' => 'order'], function() {
            Route::post('store', [\App\Http\Controllers\Api\SoldController::class, 'store']);
            Route::get('findSoldBySeller', [\App\Http\Controllers\Api\SoldController::class, 'findSoldBySeller']);
            Route::post('findByNameOrRef', [\App\Http\Controllers\Api\SoldController::class, 'findByNameOrRef']);
        });
    });
});
