<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('kampuses')->insert([
            [
                'nama' => 'Kampus A',
                'alamat' => 'Jl. Situ Indah 116',
                'latitude' => -6.368722,
                'longitude' => 106.839074,
            ],
            [
                'nama' => 'Kampus B',
                'alamat' => 'Jl. Raya Lenteng Agung No.20-21',
                'latitude' => -6.321576,
                'longitude' => 106.831632,
            ],
        ]);
    }
}
