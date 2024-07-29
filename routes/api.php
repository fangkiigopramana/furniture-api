<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ProductTypeController;

Route::resource('users',ApiController::class);

Route::post('login', [ApiAuthController::class, 'login']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::get('types', [ProductTypeController::class, 'index']);
Route::get('types/{id}', [ProductTypeController::class, 'show']);

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('products', ProductController::class)->except('index','show');
    Route::resource('types', ProductTypeController::class)->except('index','show');
});
