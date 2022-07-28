<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id_admin' => '1',
            'nama' => 'Kevin',
            'role' => 'admin',
            'email' => 'kevinsuryaperdana@gmail.com',
            'username' => 'kevinganteng', 
            'password' => ('kevin211096')
        ]);
        DB::table('admin')->insert([
            'id_admin' => '2',
            'nama' => 'Fenny',
            'role' => 'admin',
            'email' => 'fennyresav18@gmail.com',
            'username' => 'fennyresav18', 
            'password' => ('fenny')
        ]);
        DB::table('admin')->insert([
            'id_admin' => '3',
            'nama' => 'Ilyas',
            'role' => 'sales',
            'email' => 'ilyas@gmail.com',
            'username' => 'ilyas', 
            'password' => ('ilyas')
        ]);
    }
}
