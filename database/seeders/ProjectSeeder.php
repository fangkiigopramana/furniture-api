<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                'name' => "Barcode App",
                'tools' => "React, Tailwind, react-qr-code, NPM",
                'describe' => "A barcode application program allows users to generate and scan barcodes on products.",
                'thumbnail' => 'https://img.inews.co.id/media/822/files/inews_new/2018/10/12/pixabay.jpg',
                'link_demo' => 'https://kiar.vercel.app/'
            ),
            array(
                'name' => "Bookshelf API",
                'tools' => "Node JS, Express",
                'describe' => "The Bookshelf API project utilizes Node.js and Express to create a robust API for managing a collection of books. This API allows for easy creation, retrieval, updating, and deletion of book records, providing a seamless interface for interacting with a digital bookshelf.",
                'thumbnail' => 'https://www.starbackdrops.com/cdn/shop/files/SBH0525-8-8.png',
                'link_demo' => 'https://bookshelf-api-express.vercel.app/'
            ),
            array(
                'name' => "News Portal",
                'tools' => "Laravel, News API",
                'describe' => "The News Portal project is a dynamic web application developed using Laravel, designed to provide users with the latest news articles from various sources. By integrating the News API, the portal fetches real-time news updates, categorizing them for easy navigation and providing a seamless user experience.",
                'thumbnail' => 'https://themewagon.com/wp-content/uploads/2020/09/aznews-1.jpg',
                'link_demo' => 'https://news-portal-web.000webhostapp.com/'
            ),
        );

        foreach ($projects as $index => $project) {
            Project::create([
                'name' => $project['name'],
                'tools' => $project['tools'],
                'describe' => $project['describe'],
                'thumbnail' => $project['thumbnail'],
                'link_demo' => $project['link_demo'],
            ]);
        }
    }
}
