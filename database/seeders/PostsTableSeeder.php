<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'id_user' => '2',
            'id_kategori' => '1',
            'judul' => 'Post Pertama',
            'slug' => 'lorem1',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'tgl_post' => '2022-03-06',
            'foto' => 'chuttersnap-cT1GiVS6D3U-unsplash.jpg'
        ]);
        Post::create([
            'id_user' => '2',
            'id_kategori' => '1',
            'judul' => 'Post Kedua',
            'slug' => 'lorem2',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'tgl_post' => '2022-06-06',
            'foto' => 'chuttersnap-cT1GiVS6D3U-unsplash.jpg',
        ]);
        Post::create([
            'id_user' => '2',
            'id_kategori' => '2',
            'judul' => 'Post Ketiga',
            'slug' => 'lorem3',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'tgl_post' => '2022-06-10',
            'foto' => 'kaleb-tapp-vF-35hVaQVA-unsplash.jpg',
        ]);
        //
    }
}
