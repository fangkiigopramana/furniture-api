<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FurniApiService
{
    public function getAllProduct()
    {
        $url = config('app.furni_api_url') . '/data';
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json()['payload'];
        } else {
            throw new Exception('Failed to fetch all product from API');
        }
    }

    public function getAllType()
    {
        $url = config('app.furni_api_url') . '/data';
        $response = Http::get($url);
    
        if ($response->successful()) {
            $products = $response->json()['payload'];
    
            $uniqueTypes = array_reduce($products, function ($carry, $product) {
                $type = $product['type'];
                if (!isset($carry[$type])) {
                    $carry[$type] = $product;
                }
                return $carry;
            }, []);
    
            $formattedTypes = array_map(function ($product) {
                return [
                    'type' => $product['type'],
                    'image_link' => $product['img_link'],
                ];
            }, $uniqueTypes);
    
            return $formattedTypes;
        } else {
            throw new Exception('Failed to fetch all type from API');
        }
    }
    

    public function getAllProductByType(String $type)
    {
        $url = config('app.furni_api_url') . '/data/type/'.$type;
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json()['payload'];
        } else {
            throw new Exception('Failed to fetch all product by type from API');
        }
    }

    public function getProductById(String $id)
    {
        $url = config('app.furni_api_url') . '/data/product/'.$id;
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json()['payload'];
        } else {
            throw new Exception('Failed to fetch detail product by id from API');
        }
    }

    public function getThreeBestProducts()
    {
        $url = config('app.furni_api_url') . '/data';
        $response = Http::get($url);

        if ($response->successful()) {
            $products = $response->json()['payload'];
            return array_slice($products,9,3); // Ambil 3 random product
        } else {
            throw new Exception('Failed to fetch products from API');
        }
    }
}
