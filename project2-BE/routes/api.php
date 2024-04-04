<?php

use App\Http\Controllers\Api\V1\AuthenticationController;
use App\Http\Controllers\api\V1\ManufacturersController;
use App\Http\Controllers\api\V1\ProductController;
use \App\Http\Controllers\Api\V1\UploadImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=> 'v1'],function (){
    Route::apiResource("products",ProductController::class);
    Route::apiResource("manufacturers",ManufacturersController::class);
    Route::apiResource("auth",AuthenticationController::class);
});

Route::group([
    'prefix' => 'v1'
], function () {
    Route::post('login', [AuthenticationController::class,"login"]);
    Route::post('logout', [AuthenticationController::class,"logout"]);
    Route::post('refresh-token', [AuthenticationController::class,"refresh"]);
    Route::post('upload_avatar', [UploadImageController::class,"imageUpload"]);
    Route::get('user', [AuthenticationController::class,"getUser"]);
    Route::post('register', [AuthenticationController::class,"register"]);
});

