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
        Schema::create('store_file_praktikan', function (Blueprint $table) {
            $table->bigIncrements('id_store_file_praktikan');
            $table->string('path_file_praktikan')->unique()->nullable();
            $table->foreignId('id_kegiatan_praktikum')->nullable();
            $table->foreignId('id_file_tugas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_file_praktikan');
    }
};
