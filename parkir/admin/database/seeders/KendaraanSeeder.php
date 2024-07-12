<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kendaraan::create([
            'merk' => 'Toyota',
            'pemilik' => 'Andi',
            'nopol' => 'B 1234 CD',
            'tahun_beli' => 2020,
            'deskripsi' => 'Mobil sedan warna hitam',
            'jenis_kendaraan_id' => 1, // ID dari Jenis Mobil
            'kapasitas_id' => 4,
            'rating' => 5,
        ]);

        Kendaraan::create([
            'merk' => 'Honda',
            'pemilik' => 'Budi',
            'nopol' => 'B 5678 EF',
            'tahun_beli' => 2021,
            'deskripsi' => 'Motor sport warna merah',
            'jenis_kendaraan_id' => 2, // ID dari Jenis Motor
            'kapasitas_id' => 2,
            'rating' => 4,
        ]);

        Kendaraan::create([
            'merk' => 'Suzuki',
            'pemilik' => 'Citra',
            'nopol' => 'B 9123 GH',
            'tahun_beli' => 2019,
            'deskripsi' => 'Mobil SUV warna putih',
            'jenis_kendaraan_id' => 1, // ID dari Jenis Mobil
            'kapasitas_id' => 5,
            'rating' => 4,
        ]);

        Kendaraan::create([
            'merk' => 'Yamaha',
            'pemilik' => 'Dito',
            'nopol' => 'B 4567 IJ',
            'tahun_beli' => 2020,
            'deskripsi' => 'Motor matic warna biru',
            'jenis_kendaraan_id' => 2, // ID dari Jenis Motor
            'kapasitas_id' => 2,
            'rating' => 4,
        ]);

        Kendaraan::create([
            'merk' => 'Polygon',
            'pemilik' => 'Eka',
            'nopol' => 'B 7890 KL',
            'tahun_beli' => 2022,
            'deskripsi' => 'Sepeda gunung warna hijau',
            'jenis_kendaraan_id' => 3, // ID dari Jenis Sepeda
            'kapasitas_id' => 1,
            'rating' => 4,
        ]);
    }
}
