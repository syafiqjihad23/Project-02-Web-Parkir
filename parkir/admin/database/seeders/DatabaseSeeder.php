<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Panggil seeder yang ingin dijalankan di sini
        $this->call([
            AreaParkirSeeder::class,
            // seeder lainnya
        ]);
    }
}
