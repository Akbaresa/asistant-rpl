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
        Schema::create('file_tugas', function (Blueprint $table) {
            $table->bigIncrements('id_file_tugas')->startingValue(1000);
            $table->foreignId('id_pertemuan');
            $table->foreignId('id_jenis_tugas');
            $table->string('path_file_tugas')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_tugas');
    }
};
