<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'github' => 'johndoe',
                'twitter' => 'johndoe',
                'location' => 'New York, USA',
                'latest_article_published' => 'How to Build Microservices with Lumen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'github' => 'janedoe',
                'twitter' => 'janedoe',
                'location' => 'London, UK',
                'latest_article_published' => '10 Tips for Successful Remote Working',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Michael Saiba',
                'email' => 'michaelsaiba84@gmail.com',
                'github' => 'konyuka',
                'twitter' => 'konyuka',
                'location' => 'Nairobi, KE',
                'latest_article_published' => '10 Tips for Successful Remote Working',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
