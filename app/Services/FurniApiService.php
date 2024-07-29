<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FurniApiService
{
    public function getAllProduct()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://kihub-app.test/api/products');
        $data = json_decode($response->getBody()->getContents(), true);
        return $data;
    }

    public function getAllType()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://kihub-app.test/api/types');
        $data = json_decode($response->getBody()->getContents(), true);
        return $data;
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
