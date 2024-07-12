<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 50);
            $table->string('pemilik', 100);
            $table->string('nopol', 20);
            $table->integer('tahun_beli');
            $table->string('deskripsi')->nullable();
            $table->foreignId('jenis_kendaraan_id')->constrained('jeniss')->onDelete('cascade');
            $table->foreignId('kapasitas_id')->constrained('area_parkirs')->onDelete('cascade');
            $table->integer('rating')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
