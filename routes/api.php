<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ProductTypeController;

Route::resource('users',ApiController::class);
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthApiController::class, 'login']);
    Route::post('logout', [AuthApiController::class,'logout']);
    Route::post('refresh', [AuthApiController::class,'refresh']);
    Route::post('me', [AuthApiController::class,'me']);
});
Route::resource('products',ProductController::class);
Route::resource('types',ProductTypeController::class);
