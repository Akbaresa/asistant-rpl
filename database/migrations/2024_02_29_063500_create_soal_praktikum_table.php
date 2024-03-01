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
        Schema::create('soal_praktikum', function (Blueprint $table) {
            $table->bigIncrements('id_soal_praktikum')->startingValue(1000);
            $table->foreignId('id_kegiatan_praktikum');
            $table->string('path_soal_praktikum')->unique();
            $table->string('kode_soal_praktikum')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};
