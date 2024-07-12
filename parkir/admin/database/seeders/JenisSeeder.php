<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('jenis')->insert([
            ['nama' => 'Mobil'],
            ['nama' => 'Motor'],
            ['nama' => 'Sepeda'],
        ]);
    }
}
