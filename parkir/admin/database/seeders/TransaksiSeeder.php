<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('transaksis')->insert([
            [
                'tanggal' => '2024-07-01',
                'mulai' => '08:00:00',
                'akhir' => '10:00:00',
                'keterangan' => 'Parkir untuk meeting',
                'biaya' => 5000,
                'kendaraan_id' => 1, // Mobil
                'area_parkir_id' => 1,
            ],
            [
                'tanggal' => '2024-07-02',
                'mulai' => '09:00:00',
                'akhir' => '11:00:00',
                'keterangan' => 'Parkir untuk kuliah',
                'biaya' => 3000,
                'kendaraan_id' => 2, // Motor
                'area_parkir_id' => 2,
            ],
            [
                'tanggal' => '2024-07-03',
                'mulai' => '07:00:00',
                'akhir' => '09:00:00',
                'keterangan' => 'Parkir untuk olahraga',
                'biaya' => 1000,
                'kendaraan_id' => 3, // Sepeda
                'area_parkir_id' => 3,
            ],
            [
                'tanggal' => '2024-07-04',
                'mulai' => '10:00:00',
                'akhir' => '12:00:00',
                'keterangan' => 'Parkir untuk rapat',
                'biaya' => 5000,
                'kendaraan_id' => 4, // Mobil
                'area_parkir_id' => 4,
            ],
            [
                'tanggal' => '2024-07-05',
                'mulai' => '08:30:00',
                'akhir' => '10:30:00',
                'keterangan' => 'Parkir untuk belanja',
                'biaya' => 3000,
                'kendaraan_id' => 5, // Motor
                'area_parkir_id' => 1,
            ],
            [
                'tanggal' => '2024-07-06',
                'mulai' => '13:00:00',
                'akhir' => '15:00:00',
                'keterangan' => 'Parkir untuk makan siang',
                'biaya' => 5000,
                'kendaraan_id' => 1, // Mobil
                'area_parkir_id' => 2,
            ],
            [
                'tanggal' => '2024-07-07',
                'mulai' => '11:00:00',
                'akhir' => '13:00:00',
                'keterangan' => 'Parkir untuk seminar',
                'biaya' => 3000,
                'kendaraan_id' => 2, // Motor
                'area_parkir_id' => 3,
            ],
            [
                'tanggal' => '2024-07-08',
                'mulai' => '15:30:00',
                'akhir' => '17:30:00',
                'keterangan' => 'Parkir untuk rapat tim',
                'biaya' => 1000,
                'kendaraan_id' => 3, // Sepeda
                'area_parkir_id' => 4,
            ],
            [
                'tanggal' => '2024-07-09',
                'mulai' => '12:00:00',
                'akhir' => '14:00:00',
                'keterangan' => 'Parkir untuk belajar',
                'biaya' => 5000,
                'kendaraan_id' => 4, // Mobil
                'area_parkir_id' => 1,
            ],
            [
                'tanggal' => '2024-07-10',
                'mulai' => '09:30:00',
                'akhir' => '11:30:00',
                'keterangan' => 'Parkir untuk meeting online',
                'biaya' => 3000,
                'kendaraan_id' => 5, // Motor
                'area_parkir_id' => 2,
            ],
        ]);
    }
}
