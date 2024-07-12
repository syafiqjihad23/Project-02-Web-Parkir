<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\AreaParkir;

class AreaParkirSeeder extends Seeder
{
    public function run()
    {
        DB::table('area_parkirs')->insert([
            [
                'nama' => 'Parkir Utama A',
                'kapasitas' => 100,
                'keterangan' => 'Area parkir utama depan kampus A',
                'kampus_id' => 1,
            ],
            [
                'nama' => 'Parkir Utama B3',
                'kapasitas' => 75,
                'keterangan' => 'Area parkir dekat gedung B3',
                'kampus_id' => 2,
            ],
            [
                'nama' => 'Parkir Gedung B2',
                'kapasitas' => 25,
                'keterangan' => 'Area parkir dekat gedung B2',
                'kampus_id' => 2,
            ],
            [
                'nama' => 'Parkir Utama B1',
                'kapasitas' => 4,
                'keterangan' => 'Area parkir dekat gedung B1',
                'kampus_id' => 2,
            ],
        ]);
    }
}
