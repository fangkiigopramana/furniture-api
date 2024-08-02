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

Route::get('/',function(){
    return [
        'status' => 'success',
        'message' => 'please access /api to get all route api'
    ];
})->name('home');

Route::controller(AuthController::class)->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('/login','form')->name('login');
        Route::get('/register','form')->name('register');
        Route::post('/store','store')->name('register.store');
        Route::post('/validate','validate')->name('login.validate');
    });
    Route::get('/logout','logout')->name('logout')->middleware('auth');

});