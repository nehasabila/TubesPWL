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
            'id_user' => '4',
            'isi_komentar' => 'Good',
        ]);
        Komentar::create([
            'id_post' => '2',
            'id_user' => '5',
            'isi_komentar' => 'blognya bagus.',
        ]);
        Komentar::create([
            'id_post' => '1',
            'id_user' => '4',
            'isi_komentar' => 'Bagus.',
        ]);
        Komentar::create([
            'id_post' => '1',
            'id_user' => '5',
            'isi_komentar' => 'sangat bermanfaat.',
        ]);
        Komentar::create([
            'id_post' => '3',
            'id_user' => '4',
            'isi_komentar' => 'sangat menarik',
        ]);
        Komentar::create([
            'id_post' => '3',
            'id_user' => '5',
            'isi_komentar' => 'bagus sekali',
        ]);
        Komentar::create([
            'id_post' => '4',
            'id_user' => '4',
            'isi_komentar' => 'menarik',
        ]);
        Komentar::create([
            'id_post' => '4',
            'id_user' => '5',
            'isi_komentar' => 'sangat bagus',
        ]);
        Komentar::create([
            'id_post' => '5',
            'id_user' => '5',
            'isi_komentar' => 'sangat menarik',
        ]);
        Komentar::create([
            'id_post' => '5',
            'id_user' => '4',
            'isi_komentar' => 'Good',
        ]);
    }
}
