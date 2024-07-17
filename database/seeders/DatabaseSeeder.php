<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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

        User::create([
            'name' => 'Fangki',
            'email' => 'fangkiigo13@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            ExperienceSeeder::class,
            ProjectSeeder::class,
            SocialMediaSeeder::class,
        ]);
    }
}
