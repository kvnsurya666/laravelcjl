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
            'nama' => 'Andi Saputra',
            'nis' => 101,
            'tgl_lahir' => '2003-12-22',
        ]);
        DB::table('sales')->insert([
            'nama' => 'Budi Cahya',
            'nis' => 102,
            'tgl_lahir' => '2004-01-30',
        ]);
    }
}
