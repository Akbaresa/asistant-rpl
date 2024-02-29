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
        Schema::create('jenis_tugas', function (Blueprint $table) {
            $table->bigIncrements('id_jenis_tugas')->startingValue(1000);
            $table->foreignId('id_pertemuan');
            $table->string('nama_jenis_tugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_tugas');
    }
};
