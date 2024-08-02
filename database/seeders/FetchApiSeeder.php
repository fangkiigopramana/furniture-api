<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use App\Services\FurniApiService;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $furniApiService = new FurniApiService();
        $types = $furniApiService->getAllType();
        $products = $furniApiService->getAllProduct();

        foreach ($types as $type) {
            ProductType::create([
                'name' => $type['type'],
            ]);
        }

        function updateImageLink($url) {
            $url = preg_replace('/&w=\d+/', '', $url);
            $url = preg_replace('/&q=\d+/', '', $url);
            $url .= "&w=477&h=477";
            return $url;
        }

        foreach ($products as $product) {
            $type_id = ProductType::where('name', $product['type'])->first()->id;
            Product::create([
                'type_id' => $type_id,
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'img_link' => updateImageLink($product['img_link']),
            ]);
        }
    }
}
