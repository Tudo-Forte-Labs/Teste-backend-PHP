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
   Route::group(['prefix' => 'products'], function() {
      Route::get('findAll', [\App\Http\Controllers\Api\ProductController::class, 'findAll']);
       Route::get('findById/{id}', [\App\Http\Controllers\Api\ProductController::class, 'findById']);
   });
});
