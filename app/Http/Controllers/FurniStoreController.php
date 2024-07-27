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
        $types = $furniApiService->getAllType();
        $best_products = $furniApiService->getThreeBestProducts();

        // Fungsi untuk memperbarui URL gambar
        function updateImageLink($url) {
            $url = preg_replace('/&w=\d+/', '', $url); // Menghapus parameter w
            $url = preg_replace('/&q=\d+/', '', $url); // Menghapus parameter q
            $url .= "&w=477&h=477"; // Menambahkan parameter w=477 dan h=477
            return $url;
        }

        // Memperbarui data
        foreach ($products as &$item) {
            if (isset($item['img_link'])) {
                $item['img_link'] = updateImageLink($item['img_link']);
            }
        }


        return view('home',compact('products','types','best_products'));
    }

}
