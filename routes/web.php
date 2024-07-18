<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;

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
    Route::get('/logout', 'logout')->name('logout');
    Route::middleware('auth')->group(function(){
        Route::get('/dashboard','dashboard')->name('dashboard');
        Route::get('/personal-identity','showPersonalIdentity')->name('personal_identity');
    });
});

Route::get('/coba', function(){
    return redirect()->back();
});