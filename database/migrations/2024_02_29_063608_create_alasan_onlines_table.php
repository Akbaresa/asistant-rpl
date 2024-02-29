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
        Schema::create('alasan_online', function (Blueprint $table) {
            $table->bigIncrements('id_alasan_online')->startingValue(1000);
            $table->foreignId('id_penilaian');
            $table->string('nama_alasan');
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alasan_online');
    }
};
