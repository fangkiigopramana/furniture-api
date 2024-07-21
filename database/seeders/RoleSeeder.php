<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'buyer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'seller',
                'guard_name' => 'web',
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
