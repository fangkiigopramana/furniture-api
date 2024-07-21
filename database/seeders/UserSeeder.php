<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buyers = User::create([
            'name' => 'Jhon Buyer',
            'email' => 'john.buyer@gmail.com',
            'password' => Hash::make('buyerhappy123')
        ]);

        $buyers->assignRole('buyer');
        
        $sellers = User::create([
            'name' => 'Michel Seller',
            'email' => 'michel.seller@gmail.com',
            'password' => Hash::make('untungterus123')
        ]);

        $sellers->assignRole('seller');

    }
}
