<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/','index')->name('home');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','auth')->name('auth');
    Route::middleware('auth')->group(function(){
        Route::get('/dashboard','dashboard')->name('dashboard');
        Route::get('/personal-identity','showPersonalIdentity')->name('personal_identity');
    });
});

Route::view('/coba','coba-dropzone');