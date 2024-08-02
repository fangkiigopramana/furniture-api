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
        $client = new Client();

        function updateImageLink($url) {
            $url = preg_replace('/&w=\d+/', '', $url);
            $url = preg_replace('/&q=\d+/', '', $url);
            $url .= "&w=477&h=477";
            return $url;
        }

        // Add product datas
        $res_products = $client->request('GET', 'https://furniture-dummy-data-api.vercel.app/data');
        $products = json_decode($res_products->getBody()->getContents(), true)['payload'];
        
        foreach ($products as $product) {
            Product::create([
                'type' => $product['type'],
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'img_link' => updateImageLink($product['img_link']),
            ]);
        }
        
        
        // Add product type datas
        $collection = collect($products);
        $groupedByType = $collection->groupBy('type');
        $types = $groupedByType->map(function ($group) {
            return [
                'name' => $group->first()['type'],
                'img_link' => updateImageLink($group->first()['img_link']),
            ];
        })->values();

        foreach ($types as $type) {
            ProductType::create([
                'name' => $type['name'],
                'img_link' => $type['img_link'],
            ]);
        }

    }
}
