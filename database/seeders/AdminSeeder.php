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
            'nama' => 'Kevin',
            'email' => 'kevinsuryaperdana@gmail.com',
            'username' => 'kevinganteng', 
            'password' => bcrypt('kevin211096')
        ]);
    }
}
