<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
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

Route::prefix('v1')->group(function() {

    Route::resource('products', ProductsController::class, ['parameters' => [
                        'products' => 'sku'
                    ]])->only([
                        'index','show' 
                    ]);

    Route::resource('orders', OrdersController::class)->only([
        'show', 'store'
    ]);

});