<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Komentar;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Komentar::create([
            'id_post' => '2',
            'id_user' => '2',
            'isi_komentar' => 'dwunduwuh93r8dj82hd39hdjxoxmncu3ru8r8423',
        ]);
        Komentar::create([
            'id_post' => '2',
            'id_user' => '2',
            'isi_komentar' => 'blognya bagus.',
        ]);
    }
}
