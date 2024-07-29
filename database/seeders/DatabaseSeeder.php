<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Services\FurniApiService;
use Database\Seeders\AssignPermissionSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            //User Seeder
            PermissionSeeder::class,
            RoleSeeder::class,
            AssignPermissionSeeder::class,
            UserSeeder::class,
        ]);

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
