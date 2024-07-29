<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FurniApiService;
use App\Models\User;

class FurniStoreController extends Controller
{
    public function home(){
        $furniApiService = new FurniApiService();
        $products = $furniApiService->getAllProduct();
        $types = $furniApiService->getAllType()['data'];
        $best_products = $furniApiService->getThreeBestProducts();

        return view('home',compact('products','types','best_products'));
    }

}
