<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Kevin',
            'email' => 'kevin@sma404.com',
            'username' => 'kevinganteng', 
            'password' => bcrypt('kevin211096')
        ]);
    }
}
