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
            FetchApiSeeder::class,
        ]);
    }
}
