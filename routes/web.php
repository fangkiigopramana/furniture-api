<?php

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

Route::prefix('project')->group(function (){
    Route::prefix('furni-store')->group(function (){
        Route::controller(FurniStoreController::class)->group(function (){
            Route::get('/','home')->name('furni.home');
        });
    });
});
