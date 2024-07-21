<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $social_medias = [
            [
                'name' => 'Instagram',
                'link' => 'https://www.instagram.com/fangki_ip/',
            ],
            [
                'name' => 'Github',
                'link' => 'https://github.com/fangkiigopramana',
            ],
            [
                'name' => 'Linkedin',
                'link' => 'https://www.linkedin.com/in/fangkiigopramana',
            ],
        ];

        foreach ($social_medias as $sosmed) {
            SocialMedia::create($sosmed);
        }
    }
}
