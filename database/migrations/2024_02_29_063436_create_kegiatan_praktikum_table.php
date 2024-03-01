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
        Schema::create('kegiatan_praktikum', function (Blueprint $table) {
            $table->bigIncrements('id_kegiatan_praktikum')->startingValue(1000);
            $table->foreignId('id_pertemuan');
            $table->foreignId('id_sesi');
            $table->date('tanggal');
            $table->enum('status_aktif', ['aktif', 'tidak'])->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_praktikum');
    }
};
