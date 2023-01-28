<?php

use App\Http\Controllers\Api\AccessTokensController;
use App\Http\Controllers\Api\DeliveriesController;
use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return Auth::guard('sanctum')->user();
});

Route::apiResource('products', ProductsController::class);

Route::post('auth/access-tokens', [AccessTokensController::class, 'store'])->middleware('guest:sanctum');

Route::delete('auth/access-tokens/{token?}', [AccessTokensController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('deliveries/{delivery}', [DeliveriesController::class, 'show']);

Route::put('deliveries/{delivery}', [DeliveriesController::class, 'update']);
