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
        Schema::create('praktikum', function (Blueprint $table) {
            $table->bigIncrements('id_praktikum')->startingValue(1000);
            $table->foreignId('id_jenis_praktikum');
            $table->enum('status', ['aktif', 'tidak'])->default('tidak');
            $table->enum('status_pendaftaran', ['aktif', 'tidak'])->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('praktikum');
    }
};
