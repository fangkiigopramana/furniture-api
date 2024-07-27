<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductTypeController;

Route::resource('users',ApiController::class);
Route::resource('products',ProductController::class);
Route::resource('types',ProductTypeController::class);

