<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\kategori;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Alif',
        //     'email' => 'alif123@gmail.com',
        //     'password' => bcrypt('alif123')
        // ]);

        // User::create([
        //     'name' => 'Hiko',
        //     'email' => 'hiko123@gmail.com',
        //     'password' => bcrypt('hiko123')
        // ]);

        User::factory(3)->create();

        kategori::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        kategori::create([
            'nama' => 'Web Design',
            'slug' => 'web-design'
        ]);

        kategori::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.',
        //     'body' => '<p>Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.</p><p>Ryzen dan timnya, Bigetron Red Aliens (BTR RA), sudah menorehkan banyak prestasi di turnamen tingkat nasional maupun internasional. Ryzen bahkan disebut-sebut masuk dalam jajaran pro player PUBG Mobile terbaik di dunia.</p>',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.',
        //     'body' => '<p>Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.</p><p>Ryzen dan timnya, Bigetron Red Aliens (BTR RA), sudah menorehkan banyak prestasi di turnamen tingkat nasional maupun internasional. Ryzen bahkan disebut-sebut masuk dalam jajaran pro player PUBG Mobile terbaik di dunia.</p>',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.',
        //     'body' => '<p>Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.</p><p>Ryzen dan timnya, Bigetron Red Aliens (BTR RA), sudah menorehkan banyak prestasi di turnamen tingkat nasional maupun internasional. Ryzen bahkan disebut-sebut masuk dalam jajaran pro player PUBG Mobile terbaik di dunia.</p>',
        //     'kategori_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.',
        //     'body' => '<p>Ini dia profil dan biodata BTR Ryzen, pro player PUBG Mobile yang punya julukan super manggis. Sosok Ryzen pastinya sudah tidak asing di kalangan player PUBG Mobile, terutama yang setia mengikuti skema kompetitifnya.</p><p>Ryzen dan timnya, Bigetron Red Aliens (BTR RA), sudah menorehkan banyak prestasi di turnamen tingkat nasional maupun internasional. Ryzen bahkan disebut-sebut masuk dalam jajaran pro player PUBG Mobile terbaik di dunia.</p>',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
