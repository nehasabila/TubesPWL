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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'admin',
        ]);
        
        User::create([
            'name' => 'Nadira Alifya',
            'email' => 'penulis1@gmail.com',
            'password' => bcrypt('penulis1'),
            'status' => 'penulis'
        ]);
        User::create([
            'name' => 'Faiz Chandra',
            'email' => 'penulis2@gmail.com',
            'password' => bcrypt('penulis2'),
            'status' => 'penulis'
        ]);
        
        User::create([
            'name' => 'Nita Putri',
            'email' => 'pembaca1@gmail.com',
            'password' => bcrypt('pembaca1'),
            'status' => 'pembaca'
        ]);
        User::create([
            'name' => 'Andi Syahputra',
            'email' => 'pembaca2@gmail.com',
            'password' => bcrypt('pembaca2'),
            'status' => 'pembaca'
        ]);
        //
    }
}
