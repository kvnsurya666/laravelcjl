<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'nama' => 'Ilyas',
            'alamat' => 'Surabaya',
            'tgl_lahir' => '1977-01-01',
        ]);
        DB::table('sales')->insert([
            'nama' => 'Edi',
            'alamat' => 'Surabaya',
            'tgl_lahir' => '1975-01-30',
        ]);
    }
}
