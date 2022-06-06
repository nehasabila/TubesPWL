<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        
        User::create([
            'id' => '2',
            'name' => 'Penulis Pertama',
            'email' => 'penulis1@gmail.com',
            'password' => bcrypt('penulis11'),
        ]);
        
        User::create([
            'id' => '3',
            'name' => 'Pembaca Pertama',
            'email' => 'pembaca1@gmail.com',
            'password' => bcrypt('pembaca1'),
        ]);
        //
    }
}
