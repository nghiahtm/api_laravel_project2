<?php

use App\Http\Controllers\api\V1\AuthenticationController;
use App\Http\Controllers\api\V1\ManufacturersController;
use App\Http\Controllers\api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=> 'v1'],function (){
    Route::apiResource("products",ProductController::class);
    Route::apiResource("manufacturers",ManufacturersController::class);
    Route::apiResource("authenticate",AuthenticationController::class);
});

