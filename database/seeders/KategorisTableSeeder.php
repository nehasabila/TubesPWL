<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kategori' => 'Kategori 1',
        ]);
        Kategori::create([
            'kategori' => 'Kategori 2',
        ]);
        Kategori::create([
            'kategori' => 'Kategori 3',
        ]);
        //
    }
}
