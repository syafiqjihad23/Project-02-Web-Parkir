<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaParkirsTable extends Migration
{
    public function up()
    {
        Schema::create('area_parkirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->integer('kapasitas');
            $table->string('keterangan', 45)->nullable();
            $table->foreignId('kampus_id')->constrained('kampuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('area_parkirs');
    }
}
