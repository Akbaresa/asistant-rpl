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
        Schema::create('pertemuan_sesi', function (Blueprint $table) {
            $table->bigIncrements('id_pertemuan_sesi')->startingValue(1000);
            $table->foreignId('id_pertemuan');
            $table->foreignId('id_sesi');
            $table->enum('status', ['aktif', 'tidak'])->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan_sesi');
    }
};
