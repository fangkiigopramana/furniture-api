<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\FurniStoreController;

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

Route::prefix('furni-store')->group(function (){
    Route::controller(FurniStoreController::class)->group(function (){
        Route::get('/home','home')->name('furni.home');
    });

    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','form')->name('login')->middleware('guest');
        Route::get('/register','form')->name('register')->middleware('guest');
    
        Route::middleware(['auth'])->group(function(){
            Route::get('/logout','logout')->name('logout');
            Route::post('/validate','validate')->name('login.validate');
            Route::post('/store','store')->name('register.store');
        });
    });
});



