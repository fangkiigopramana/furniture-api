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

Route::get('/api', function () {
    return
        [
            'status' => 'success',
            'message' => [
                "maintainer" => "Fangki Igo Pramana",
                "source" =>  "https://github.com/fangkiigopramana/furniture-api",
                "endpoints" => [
                    "all_product" => "GET, https://furni-api.kihub.net/api/products",
                    "all_types" => "GET,   https://furni-api.kihub.net/api/products/data/types",
                    "by_name" => [
                        "request" => "GET, https://furni-api.kihub.net/api/products?name=product_name"
                    ],
                    "by_type" => [
                        "request" => "GET, https://furni-api.kihub.net/api/products?type=type_name",
                        "example" => "GET, https://furni-api.kihub.net/api/products?type=decoration"
                    ],
                    "by_product_id" => [
                        "request" => "GET, https://furni-api.kihub.net/api/products/product_id",
                        "example" => "GET, https://furni-api.kihub.net/api/products/3"
                    ]
                ]
            ]
        ];
})->name('home');


Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'form')->name('login');
        Route::get('/register', 'form')->name('register');
        Route::post('/store', 'store')->name('register.store');
        Route::post('/validate', 'validate')->name('login.validate');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('{any}', function () {
    return redirect()->route('home');
});